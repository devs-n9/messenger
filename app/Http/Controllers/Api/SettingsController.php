<?php

namespace App\Http\Controllers\Api;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Upload;
use App\Models\Profile;

class SettingsController extends Controller
{
    public function __construct()
    {
        if(!Auth::check()){
            return false;   
        }
    }
    
    public function avatar(Request $request)
    {
        $result = '';
        $base64 = $request->json('img');
        if($base64){
            $upload = new Upload();
            $result = $upload->uploadBase64Image($base64);
            if($result){
                $profile = Profile::where('user_id', '=', Auth::user()->id)->first();
                $profile->avatar = $result;
                $profile->save();
            }
        }
        
        return response()->json($result);
    }
}