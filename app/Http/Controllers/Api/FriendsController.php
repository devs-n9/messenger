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
    //private $id;
    
//    public function get()
//    {
//        $this->id = Auth::user()->id;
//        $friends = Friends::where('user_id', '=', $this->id)->get();
//        return response()->json($friends);
//    }

    public function getFriends()
    {
        $friends = new Friends();
        $result = $friends->getFriends();
        return response()->json($result);
    }
    /**
     * @param id $
     * @return \Illuminate\Http\JsonResponse
     */
}
