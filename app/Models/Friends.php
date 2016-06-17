<?php

namespace App\Models;
use DB;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    protected $table = 'friends';
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
        $userId = Auth::user()->id;
        $friends = DB::table('users')
            ->join('friends', 'users.id', '=', 'friends.user_id')
            ->join('profile', 'friends.friend_id', '=', 'profile.user_id')
            ->select('friends.id', 'profile.name', 'profile.avatar')
            ->where('users.id', '=', $userId)
            ->get();
        return $friends;
    }
    
}