<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Profile;
use App\Http\Requests;

class BaseController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('/profile');
        }
        return view('base.index');
    }

    public function profile()
    {
        $profile = Profile::where('user_id', '=', Auth::user()->id)->first();
        return view('profile.sidebar', [
            'profile' => $profile
        ]);
    }
}
