<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Region;
use App\City;
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
        return view('profile.sidebar');
    }
}