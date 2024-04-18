<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use Razorpay\Api\Api;
use App\Models\PaymentHistory;
use App\Models\User;

use Illuminate\Support\Facades\Config;

class MoneyRequestController extends Controller
{
    public function showMoneyRequestForm()
    {
        $type0Users = User::where('type', 0)->pluck('name', 'id');
        return view('artist.money_request_form', compact('type0Users'));
    }

    public function sendMoneyRequest(Request $request)
    {
        $request->validate([
            'recipient_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:0',
        ]);

        $transaction = new Transaction();
        $transaction->sender_id = Auth::id();
        $transaction->recipient_id = $request->recipient_id;
        $transaction->amount = $request->amount;
        $transaction->save();

        return redirect()->back()->with('success', 'Money request sent successfully!');
    }

    public function processRazorpayPayment(Request $request, $transactionId)
    {
        

        $transaction = Transaction::findOrFail($transactionId);
        $transaction->update(['status' => 'paid']);

        $paymentHistory = new PaymentHistory();
        $paymentHistory->transaction_id = $transactionId;
        $paymentHistory->user_id = Auth::id();
        $paymentHistory->amount = $transaction->amount;
        $paymentHistory->save();

        return redirect()->back()->with('success', 'Payment processed successfully!');
    }

    public function handleRazorpayPayment(Request $request, $transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);

        // Initialize Razorpay API
        $api = new Api(Config::get('razorpay.RAZORPAY_KEY_ID'), Config::get('razorpay.RAZORPAY_KEY_SECRET'));

        // Capture payment
        $response = $api->payment->fetch($request->razorpay_payment_id)->capture(array('amount' => $transaction->amount * 100));

        // Save payment history
        $paymentHistory = new PaymentHistory();
        $paymentHistory->transaction_id = $transactionId;
        $paymentHistory->user_id = Auth::id();
        $paymentHistory->amount = $transaction->amount;
        $paymentHistory->save();

        return redirect()->route('success'); // Redirect to success page
    }

    public function showMoneyRequests()
    {
        $currentUser = Auth::user();
        $pendingTransactions = Transaction::where('recipient_id', $currentUser->id)
            ->where('status', 'pending')
            ->get();
        
        return view('user.money_requests', compact('currentUser', 'pendingTransactions'));
    }
}