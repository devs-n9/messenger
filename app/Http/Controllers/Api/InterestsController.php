<?php

namespace App\Http\Controllers\Api;

<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Http\Requests;

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
