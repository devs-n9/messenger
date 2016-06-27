<?php

namespace App\Http\Controllers\Api;

use App\Messages;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use models
use App\Model\Interests;

class InterestsController extends Controller
{
    public function get()
    {
        $interests = Interests::all();
        return response()->json($interests);
    }
}
