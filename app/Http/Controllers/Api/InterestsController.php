<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//use models
use App\Interests;

class InterestsController extends Controller
{
    public function get()
    {
        $interests = Interests::all();
        return response()->json($interests);
    }
}
