<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventOrders extends Model
{
    protected $table = "event_orders";
    public $timestamps = false;
    protected $guarded = [''];
}
