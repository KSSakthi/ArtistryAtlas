<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('sender', 'recipient')->get();
        return view('admin.show', compact('transactions'));
    }

    public function earningOverview()
    {
        // Fetch earnings overview data for the artist
        $earningsOverview = Transaction::select('sender_id', DB::raw('SUM(amount) as total_earnings'))
            ->where('status', 'paid')
            ->groupBy('sender_id')
            ->with('sender')
            ->get();

        return view('admin.earnings', compact('earningsOverview'));
    }
}