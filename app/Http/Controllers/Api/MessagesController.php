<?php

namespace App\Http\Controllers\Api;
use App\Messages;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Interests;

class MessagesController extends Controller
{
    public function get()
    {
        $msg = Messages::all();
        return response()->json($msg);
    }
}
