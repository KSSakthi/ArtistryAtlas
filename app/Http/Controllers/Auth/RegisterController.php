<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Notifications\WelcomeMailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required|string',
            'password' => 'required|confirmed',
            'bio' => 'nullable|string',
        ]);
    }

    protected function customCreate(Request $request)
    {
        $data = $request->all();
        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'phonenumber' => $data['phonenumber'],
            'password' => Hash::make($data['password']),
            'bio' => $data['bio'],
        ]);
        $user->notify(new \App\Notifications\WelcomeMailNotification($user));
        return redirect()->route('login')->with('success', 'Registration successful!');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
}
