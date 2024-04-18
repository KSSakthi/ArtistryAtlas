<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;

class ArtworksController extends Controller
{
    public function index()
    {
        // Fetch all artworks
        $artworks = Artwork::all();

        return view('admin.managearts', compact('artworks'));
    }

    public function destroy(Artwork $artwork)
    {
        // Delete the artwork
        $artwork->delete();

        return redirect('/artworks')->with('success', 'Artwork deleted successfully');
    }
}
