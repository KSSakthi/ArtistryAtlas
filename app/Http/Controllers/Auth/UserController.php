<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommonFields;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the user registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle the user registration form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // dd($request->all());
        
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email|unique:common_fields,email',
            'phonenumber' => 'required|string',
            'password' => 'required|string',
            'bio' => 'nullable|string',
            'agree_terms' => 'required|accepted',
        ]);

        

        // Create a new user using CommonFields model
        $user = CommonFields::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'phonenumber' => $request->input('phonenumber'),
            'password' => bcrypt($request->input('password')),
            'bio' => $request->input('bio'),
        ]);
die;
        // Create a new user using User model
        $regularUser = User::create([
            'common_fields_id' => $user->id,
            
        ]);
        // dd($request->validated());

        return redirect()->route('login')->with('success', 'User registered successfully!');
    }
}
