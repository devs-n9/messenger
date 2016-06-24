<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Query\Builder;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Models\EventOrders;
use App\Models\EventGallery;
use App\Models\EventPhotos;
use Auth;

class EventsController extends Controller
{
    
    public function get()
    {
        $user = Auth::id();
        $events = DB::table('events')
            ->where('user_id', '=', $user)
            ->get();
        return response()->json($events);
    }
}
