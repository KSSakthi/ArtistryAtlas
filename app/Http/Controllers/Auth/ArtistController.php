<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommonFields;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.artist-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:common_fields,email',
            'phonenumber' => 'required|string',
            'password' => 'required|string',
            'bio' => 'nullable|string',
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
            'bio' => 'required|string',
            'artistic_aspirations' => 'nullable|string',
            'artist_quote' => 'nullable|string',
        ]);

        $user = CommonFields::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'phonenumber' => $request->input('phonenumber'),
            'password' => bcrypt($request->input('password')),
            'bio' => $request->input('bio'),
        ]);

        $artist = Artist::create([
        'common_fields_id' => $user->id,
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
    ]);

    if ($request->hasFile('profile_picture')) {
        $profilePicture = $request->file('profile_picture');
        $profilePicturePath = 'profile_picture/' . $profilePicture->getClientOriginalName();

        move_uploaded_file($profilePicture->getPathname(), public_path($profilePicturePath));

        $artist->profile_picture = $profilePicturePath;
        $artist->save();
    }

    if ($request->hasFile('art_samples')) {
        $artSamples = [];
        foreach ($request->file('art_samples') as $file) {
            $artSamplePath = 'art_samples/' . $file->getClientOriginalName();

            move_uploaded_file($file->getPathname(), public_path($artSamplePath));

            $artSamples[] = $artSamplePath;
        }

        $artist->art_samples = $artSamples;
        $artist->save();
    }


        // return redirect()->route('login')->with('success', 'Artist registered successfully!');
    }
}
