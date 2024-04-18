<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class PaymentStatusController extends Controller
{
    public function show(Transaction $transaction)
    {
        return view('artist.payment_status', compact('transaction'));
    }
}