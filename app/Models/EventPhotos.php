<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventPhotos extends Model
{
    protected $table = "event_photos";
    public $timestamps = false;
    protected $guarded = [''];
}
