<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Notifications\WelcomeMailNotification;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phonenumber' => 'required|string',
            'password' => 'required|string',
            'bio' => 'nullable|string',
            'agree_terms' => 'required|accepted',
            'type' => 'integer|max:127',
        ]);

        $user = User::create([
            'name' => $request->input('firstname'),
            'email' => $request->input('email'),
            'phonenumber' => $request->input('phonenumber'),
            'password' => Hash::make($request->input('password')),
            'bio' => $request->input('bio'),
        ]);

        $user->notify(new WelcomeMailNotification($user));

        return redirect()->route('user.login')->with('success', 'User registered successfully!');
    }

    public function showArtistRegistrationForm()
    {
        return view('auth.artist-register');
    }

    public function registerArtist(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phonenumber' => 'required|string',
            'password' => 'required|string',
            'bio' => 'required|string',
            'username' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'agree_terms' => 'required|accepted',
            'independent_artist' => 'required|boolean',
            'gallery_representative' => 'required|boolean',
            'sell_original_artworks' => 'required|boolean',
            'sell_digital_creations' => 'required|boolean',
            'art_samples' => 'required|array',
            'art_samples.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'portfolio' => 'nullable|string',
            'socialmedia' => 'nullable|string',
            'artistic_aspirations' => 'nullable|string',
            'artist_quote' => 'nullable|string',
            'type' => 'integer|max:127',
        ]);

        $user = User::create([
            'name' => $request->input('firstname'),
            'email' => $request->input('email'),
            'phonenumber' => $request->input('phonenumber'),
            'password' => Hash::make($request->input('password')),
            'bio' => $request->input('bio'),
            'username' => $request->input('username'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'profile_picture' => null,
            'agree_terms' => $request->input('agree_terms'),
            'independent_artist' => (bool) $request->input('independent_artist'),
            'gallery_representative' => (bool) $request->input('gallery_representative'),
            'sell_original_artworks' => (bool) $request->input('sell_original_artworks'),
            'sell_digital_creations' => (bool) $request->input('sell_digital_creations'),
            'bio' => $request->input('bio'),
            'artistic_aspirations' => $request->input('artistic_aspirations'),
            'artist_quote' => $request->input('artist_quote'),
            'portfolio' => $request->input('portfolio'),
            'socialmedia' => $request->input('socialmedia'),
            'type' => $request->input('type'),
        ]);

        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $fileName = time() . '.' . $profilePicture->getClientOriginalExtension();
            $filePath = 'profile_pictures/' . $fileName; // Specify the folder name
            $profilePicture->storeAs('public', $filePath);
            $user->profile_picture = $filePath;
        }

        if ($request->hasFile('art_samples')) {
            $artSamples = [];
            foreach ($request->file('art_samples') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public', $fileName);
                $artSamples[] = $fileName;
            }
            $user->art_samples = $artSamples;
        }

        $user->save();

        $user->notify(new WelcomeMailNotification($user));

        return redirect()->route('artist.login')->with('success', 'Artist registered successfully!');
    }
}