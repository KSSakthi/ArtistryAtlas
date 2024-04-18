<?php

namespace App\Http\Controllers;

use App\Models\Tip;

class GuestTipController extends Controller
{
    public function index()
    {
        $tips = Tip::all();
        return view('user.tipdownload', compact('tips'));
    }

    public function download(Tip $tip)
    {
        $filePath = storage_path('app/' . $tip->pdf);
        return response()->download($filePath);
    }
}
