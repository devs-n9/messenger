<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use models
use App\Music;
class MusicController extends Controller
{
    public function get()
    {
        $music = Music::all();
        return response()->json($music);
    }
}
