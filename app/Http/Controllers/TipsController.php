<?php
// app/Http/Controllers/TipsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tip;

class TipsController extends Controller
{
    public function index()
    {
        // Fetch all tips
        $tips = Tip::all();

        return view('admin.managetip', compact('tips'));
    }

    public function destroy(Tip $tip)
    {
        // Delete the tip
        $tip->delete();

        return redirect('/tips')->with('success', 'Tip deleted successfully');
    }
}
