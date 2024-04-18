<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function create()
    {
        return view('artist.blog_post');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $blog = $user->blogs()->create([
            'title' => $request->input('blogTitle'),
            'content' => $request->input('blogContent'),
        ]);

        if ($request->hasFile('artworkImages')) {
            $file = $request->file('artworkImages');
            $path = $file->store('blog_images', 'public');
            $blog->update(['image_path' => $path]);
        }

        return redirect()->route('user.blog_posts');
    }

    public function index()
    {
        $user = Auth::user();
        $blogs = $user->blogs;

        return view('artist.user_blog_posts', compact('blogs'));
    }

    public function edit(Blog $blog)
    {
        return view('artist.edit_blog_post', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $blog->update([
            'title' => $request->input('blogTitle'),
            'content' => $request->input('blogContent'),
        ]);

        // Handle file upload logic for updating
        if ($request->hasFile('artworkImages')) {
            $file = $request->file('artworkImages');
            $path = $file->store('blog_images', 'public');
            $blog->update(['image_path' => $path]);
        }

        return redirect()->route('user.blog_posts');
    }
    public function destroy(Blog $blog)
{
    $blog->delete();

    return redirect()->route('user.blog_posts')->with('success', 'Blog post deleted successfully.');
}

public function allBlogs()
{
    $allBlogs = Blog::with('user') // Assuming you have a user relationship defined in the Blog model
        ->orderBy('created_at', 'desc')
        ->get();

    return view('user.all_blogs', compact('allBlogs'));
}

}