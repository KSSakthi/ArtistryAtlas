<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;

class TutorialsController extends Controller
{
    public function index()
    {
        // Fetch all tutorials
        $tutorials = Tutorial::all();
        return view('admin.managetut', compact('tutorials'));
    }

    public function destroy(Tutorial $tutorial)
    {
        // Delete the tutorial
        $tutorial->delete();
        return redirect('/tutorials')->with('success', 'Tutorial deleted successfully');
    }
}
