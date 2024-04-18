<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;
use Illuminate\Support\Facades\Auth;

class TutorialController extends Controller
{
    public function create()
    {
        return view('artist.post_tutorial');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'videoFile' => 'required|mimes:mp4,mov,avi,wmv|max:20480',
        ]);

        $user = Auth::user();
        if ($request->hasFile('videoFile')) {
            $videoFile = $request->file('videoFile');
    
            // Check if file size exceeds the limit
            if ($videoFile->getSize() > 20480 * 1024) { // 20MB in KB
                return redirect()->back()->withInput()->withErrors(['videoFile' => 'The video file size exceeds the maximum allowed limit of 20MB.']);
            }
        $tutorial = new Tutorial();
        $tutorial->user_id = $user->id;
        $tutorial->title = $request->title;
        $tutorial->description = $request->description;
        $tutorial->video_path = $request->file('videoFile')->store('videos', 'public');

        $tutorial->save();

        return redirect()->back()->with('success', 'Tutorial created successfully.');
    }
    return redirect()->back()->withErrors(['videoFile' => 'Please select a valid video file.']);
}

    public function index()
{
    $user = Auth::user();
    $tutorials = $user->tutorials; 

    return view('artist.user_tutorial', compact('tutorials'));
}
public function edit(Tutorial $tutorial)
{
    return view('artist.edit_tutorial', compact('tutorial'));
}

public function update(Request $request, Tutorial $tutorial)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'videoFile' => 'nullable|mimes:mp4,mov,avi,wmv',
    ]);

    $tutorial->title = $request->title;
    $tutorial->description = $request->description;

    if ($request->hasFile('videoFile')) {
        $tutorial->video_path = $request->file('videoFile')->store('videos', 'public');
    }

    $tutorial->save();

    return redirect()->route('user.tutorial')->with('success', 'Tutorial updated successfully.');
}

public function destroy(Tutorial $tutorial)
{
    $tutorial->delete();

    return redirect()->route('user.tutorial')->with('success', 'Tutorial deleted successfully.');
}

public function displayall()
    {
        // Retrieve all tutorials from the database
        $tutorials = Tutorial::all();

        // Pass the tutorials data to the view
        return view('user.all_tutorial', ['tutorials' => $tutorials]);
    }
}
