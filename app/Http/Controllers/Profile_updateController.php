<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile_updateController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('user.profile_updation', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'phonenumber' => 'required|string|max:20',
            'bio' => 'required|string|max:255',
        ]);

        $user->update($request->all());

        return redirect()->route('profile.edit')->with('Success', 'Profile updated successfully.');
    }
}
