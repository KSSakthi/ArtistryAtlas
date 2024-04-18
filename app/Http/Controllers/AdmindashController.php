<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Artwork;
use App\Models\Blog;
use App\Models\Tutorial;
use App\Models\Tip;
use App\Models\Announcement;

use Illuminate\Http\Request;

class AdmindashController extends Controller
{
    public function index(){

        $totalType0Users = User::where('type', 0)->count();

        $totalType2Users = User::where('type', 2)->count();

        $totalArts = Artwork::count();

        $totalblogs=Blog::count();

        $totalAnnounce=Announcement::count();

        $totalTip=Tip::count();

        return view('admin.dash', compact(
            'totalType0Users',
            'totalType2Users',
            'totalArts',
            'totalblogs',
            'totalTip',
            'totalAnnounce',
        ));
    }
}