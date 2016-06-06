<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//use models
use App\Models\Friends;
use App\User;

class FriendsController extends Controller
{
    public function get()
    {
        $friends = Friends::all();
        return response()->json($friends);
    }
}
