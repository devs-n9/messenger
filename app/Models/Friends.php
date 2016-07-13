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
     * @return invited friends
     */
    public function getFriends()
    {
        $this->userId = Auth::user()->id;
        $friends = DB::table('users')
            ->join('friends', 'users.id', '=', 'friends.user_id')
            ->join('profile', 'friends.friend_id', '=', 'profile.user_id')
            ->join('users as u', 'friends.friend_id', '=', 'u.id')
            ->select('friends.friend_id', 'profile.name as profilename', 'profile.avatar', 'u.name')
            ->where('users.id', '=', $this->userId)
            ->where('friends.status', '=', 1)
            ->get();
        return $friends;
        
    }
    /**
     * @show all users who JoinUp this user
     */
    public function getInvites()
    {
        $this->userId = Auth::user()->id;
        $request = DB::table('friends')
            ->whereRaw('friend_id = ?', [$this->userId])->get();
        return $request;
    }
    /**
     * @show all users who not in friendlist
     */
    public function getUsers()
    {  
        $this->userId = Auth::user()->id;
        $users = DB::select("SELECT pp.name as profilename, u.name , pp.avatar, pp.user_id FROM profile pp
        JOIN users u 
        ON u.id = pp.user_id 
        LEFT JOIN (SELECT p.name, f.user_id as uid FROM profile p JOIN friends f
        ON p.user_id = f.user_id
        WHERE f.friend_id = ?) as j
        ON j.uid = pp.user_id
        WHERE pp.user_id != ? AND j.name IS NULL", [$this->userId, $this->userId]);
        //AND pp.name LIKE '%?%'
        return $users;
    }
    /**
     * @delete one friend of this user
     */
    public function delFriend($id)
    {
        $this->userId = Auth::user()->id;
        $friends = DB::table('friends')
            ->where('user_id', '=', $this->userId)
            ->where('friend_id', '=', $id)
            ->delete();
        return $friends;
    }
    
    /**
     * @send request to friend with another user
     */
    public function sendRequest($id)
    {
        $this->userId = Auth::user()->id;
        $request = Friends::whereRaw('user_id = ? AND friend_id = ?', [$this->userId , $id]);
        if(empty($request)){
        $friends = DB::table('friends')
            ->insert(['user_id' => $this->userId, 'friend_id' => $id]);
        }else{
            return "You already send JoinUp to this user.";
        }
    }
    
    /**
     * @accept request for joinUp friend to this user
     */
    public function inviteFriend($id)
    {
        $this->userId = Auth::user()->id;
        DB::table('friends')
            ->insert(['user_id' => $this->userId, 'friend_id' => $id, 'status' => 1]);
        DB::table('friends')
            ->whereRaw('user_id = ? AND friend_id = ?', [$id, $this->userId])
            ->update(['status' => 1]);
    }
}