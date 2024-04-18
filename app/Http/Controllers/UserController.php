<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
{
    // Fetch users with type 0 and 2
    $users = User::whereIn('type', [0, 2])->get();
    return view('admin.manageusers', compact('users'));
}

    public function destroy(User $user)
{
    $user->delete();
    return redirect('/users')->with('success', 'User deleted successfully');
}
}




