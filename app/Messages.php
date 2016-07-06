<?php
namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Messages extends Eloquent {

    protected $connection = 'mongodb';
    protected $collection = 'messages';
    public $timestamps = false;

}