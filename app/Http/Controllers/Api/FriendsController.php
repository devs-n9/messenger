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
    protected $friends;
    public function get()
    {
        $friends = Friends::all();
        return response()->json($friends);
    }

    /**
     * @param id $
     * @return \Illuminate\Http\JsonResponse
     */

    public function getFriends($id)
    {
        $friends = Friends::find($id)->friend_id;
        return response()->json($friends);
    }
}
