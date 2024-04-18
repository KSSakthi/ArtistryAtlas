<?php

namespace App\Http\Controllers;
use App\Models\Artwork;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Tip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class DashboardController extends Controller
{
    public function allArtworks()
{
    $allArtworks = Artwork::with('likes', 'comments')
        ->orderBy('created_at', 'desc')
        ->get();

    return view('user.all_artworks1', compact('allArtworks'));
}


    public function allBlogs()
{
    $allBlogs = Blog::with('user') // Assuming you have a user relationship defined in the Blog model
        ->orderBy('created_at', 'desc')
        ->get();

    return view('user.all_blogs1', compact('allBlogs'));
}

    public function index()
    {
        $tips = Tip::all();
        return view('user.tipdownload1', compact('tips'));
    }

    public function download(Tip $tip)
    {
        $filePath = storage_path('app/' . $tip->pdf);
        return response()->download($filePath);
    }
}
