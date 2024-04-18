<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentHistory;
use App\Models\Transaction;


class SentMoneyRequestController extends Controller
{
    public function index()
    {
        $currentUser = Auth::user();
        return view('artist.Mytrans', compact('currentUser'));
    }

    public function user()
    {
        $currentUser = Auth::user();
        $pendingTransactions = Transaction::where('recipient_id', $currentUser->id)
            ->where('status', 'paid')
            ->get();
        
        return view('user.payment_history', compact('currentUser', 'pendingTransactions'));
    }
}