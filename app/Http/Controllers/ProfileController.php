<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showUpdateForm()
    {
        $user = Auth::user();
        return view('artist.personal_info', ['user' => $user]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string',
            'phonenumber' => 'required|string',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'portfolio' => 'required|string',
            'socialmedia' => 'required|string',
            'bio' => 'required|string',
            'artistic_aspirations' => 'nullable|string',
            'artist_quote' => 'nullable|string',
        ]);

        $user->name = $request->input('name');
        $user->phonenumber = $request->input('phonenumber');
        $user->portfolio = $request->input('portfolio');
        $user->socialmedia = $request->input('socialmedia');
        $user->bio = $request->input('bio');
        $user->artistic_aspirations= $request->input('artistic_aspirations');
        $user->artist_quote = $request->input('artist_quote');


        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $fileName = time() . '.' . $profilePicture->getClientOriginalExtension();
            $filePath = 'profile_pictures/' . $fileName; 
            $profilePicture->storeAs('public', $filePath);
            $user->profile_picture = $filePath;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
