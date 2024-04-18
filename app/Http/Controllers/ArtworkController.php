<?php

namespace App\Http\Controllers;
use App\Models\Artwork;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class ArtworkController extends Controller
{
    public function create()
    {
        return view('artist.post_artworks');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $artwork = $user->artworks()->create([
            'art_title' => $request->input('artTitle'),
            'art_category' => $request->input('artCategory'),
            'art_description' => $request->input('artDescription'),
        ]);

        // Handle file upload logic
        if ($request->hasFile('artworkImage')) {
            $path = $request->file('artworkImage')->store('artwork_images', 'public');
            $artwork->update(['artwork_image_path' => $path]);
        }

        return redirect()->route('user.artworks');
    }

    public function index()
    {
        $user = Auth::user();
        // Retrieve the artworks associated with the user
        $artworks = $user->artworks;

        return view('artist.user_artworks', compact('artworks'));
    }

    public function edit(Artwork $artwork)
    {
        return view('artist.edit_artwork', compact('artwork'));
    }

    public function update(Request $request, Artwork $artwork)
    {
        $artwork->update([
            'art_title' => $request->input('artTitle'),
            'art_category' => $request->input('artCategory'),
            'art_description' => $request->input('artDescription'),
        ]);

        // Handle file upload logic for updating
        if ($request->hasFile('artworkImage')) {
            $path = $request->file('artworkImage')->store('artwork_images', 'public');
            $artwork->update(['artwork_image_path' => $path]);
        }

        return redirect()->route('user.artworks');
    }
    public function destroy(Artwork $artwork)
{
    // Delete the artwork
    $artwork->delete();
    
    // Optionally, you can also delete the associated image from storage
    Storage::disk('public')->delete($artwork->artwork_image_path);

    return redirect()->route('user.artworks')->with('success', 'Artwork deleted successfully.');
}
public function recentPosts()
{
    $recentArtworks = DB::table('artworks')
        ->orderBy('created_at', 'desc')
        ->take(10)
        ->get();

    return view('user.recent_artworks', compact('recentArtworks'));
}
public function likedArtworks()
{
    $user = Auth::user();
    $likedArtworks = $user->likedArtworks;

    return view('user.liked_artworks', compact('likedArtworks'));
}

public function like(Artwork $artwork)
{
    $user = Auth::user();
    $like = $artwork->likes()->where('user_id', $user->id)->first();

    if ($like) {
        $like->delete();
    } else {
        $artwork->likes()->create(['user_id' => $user->id]);
    }

    return redirect()->route('user.all_artworks');
}


public function comment(Request $request, Artwork $artwork)
{
    $user = Auth::user();
    $comment = $artwork->comments()->create([
        'user_id' => $user->id,
        'comment' => $request->input('comment'),
    ]);

    return redirect()->route('user.all_artworks');
}

public function userComments()
{
    $user = Auth::user();
    $userComments = $user->comments;

    return view('user.comments', compact('userComments'));
}

public function editComment(Comment $comment)
{
    return view('user.edit', compact('comment'));
}

public function updateComment(Request $request, Comment $comment)
{
    $comment->update([
        'comment' => $request->input('comment'),
    ]);

    return redirect()->route('user.comments');
}

public function destroyComment(Comment $comment)
{
    $comment->delete();

    return redirect()->route('user.comments');
}


public function allArtworks()
{
    $allArtworks = Artwork::with('likes', 'comments')
        ->orderBy('created_at', 'desc')
        ->get();

    return view('user.all_artworks', compact('allArtworks'));
}
public function topUserArtworks()
{
    // Retrieve the top artworks based on the number of likes for the current logged-in user
    $user = Auth::user();

    // Assuming you have a relationship between users and artworks (e.g., userArtworks)
    $topUserArtworks = $user->userArtworks()
        ->withCount('likes')
        ->having('likes_count', '>', 0) // Exclude artworks with 0 likes
        ->orderByDesc('likes_count')
        ->take(10) // Adjust the number as needed
        ->get();

    return view('artist.toparts', compact('topUserArtworks'));
}

public function search(Request $request)
{
    // Retrieve the search query and category from the request
    $query = $request->input('query');
    $category = $request->input('category');

    // Initialize the query builder for artworks
    $artworksQuery = Artwork::query();

    // Apply category filter if a category is selected
    if (!empty($category)) {
        $artworksQuery->where('art_category', $category);
    }

    // Apply search filter if a search query is provided
    if (!empty($query)) {
        $artworksQuery->where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('art_title', 'like', "%$query%")
                         ->orWhereHas('user', function ($userQuery) use ($query) {
                             $userQuery->where('name', 'like', "%$query%");
            });
        });
    }

    // Execute the query to fetch artworks
    $allArtworks = $artworksQuery->get();

    // Pass the retrieved artworks to the view for display
    return view('user.all_artworks', compact('allArtworks'));
}
}