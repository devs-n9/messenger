<?php

namespace App\Models;
use DB;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    protected $table = 'friends';
    protected $userId;
    protected $friendId;
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     *
     */
    public function getFriends()
    {
        $this->userId = Auth::user()->id;
        $friends = DB::table('users')
            ->join('friends', 'users.id', '=', 'friends.user_id')
            ->join('profile', 'friends.friend_id', '=', 'profile.user_id')
            ->select('friends.id', 'profile.name', 'profile.avatar')
            ->where('users.id', '=', $this->userId)
            ->get();
        return $friends;
    }

    public function delFriend($id){
        $this->userId = Auth::user()->id;
        $this->friendId = $id;
        $friends = DB::table('users')
            ->join('friends', 'users.id', '=', 'friends.user_id')
            ->select('*')
            ->where(function($query)
            {
                $query->where('user_id', '=', $this->userId)
                    ->where('friend_id', '=', $this->friendId);
            })
//
//                'user_id', '=', $userId )
//            ->where( 'friend_id', '=', $id)
            ->get();
//            ->delete();
        dd($friends);
        return $friends;
    }
    
}