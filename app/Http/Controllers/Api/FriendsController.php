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
    
    public function getUsers($search)
    {
        $users = new Friends();
        $result = $users->getUsers($search);
        return response()->json($result);
    }
    
    public function getInvites()
    {
        $invites = new Friends();
        $result = $invites->getInvites();
        return response()->json($result);
    }
    
    public function sendRequest($id)
    {
        $friends = new Friends();
        $result = $friends->sendRequest($id);
    }
    
    public function inviteFriend($id)
    {
        $friends = new Friends();
        $result = $friends->inviteFriend($id);
    }
    
    public function deleteFriend($id)
    {
        $friends = new Friends();
        $result = $friends->delFriend($id);
    }
    
}
