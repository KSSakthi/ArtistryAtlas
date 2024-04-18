<?php

// app/Http/Controllers/BlogsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        // Fetch all blogs
        $blogs = Blog::all();
        return view('admin.manageblog', compact('blogs'));
    }

    public function destroy(Blog $blog)
    {
        // Delete the blog
        $blog->delete();
        return redirect('/blogs')->with('success', 'Blog deleted successfully');
    }
}
