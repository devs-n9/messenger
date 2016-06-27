<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
//use models
use App\Models\Friends;
use App\User;
use PhpParser\Node\Expr\New_;

class FriendsController extends Controller
{
    public function getFriends()
    {
        $friends = new Friends();
        $result = $friends->getFriends();
        return response()->json($result);
    }
    public function deleteFriend($id)
    {
        $friends = new Friends();
        $result = $friends->delFriend($id);
        //return response()->json($result);
    }
    /**
     * @param id $
     * @return \Illuminate\Http\JsonResponse
     */
}
