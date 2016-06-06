<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\City;
use App\Http\Requests;

class BaseController extends Controller
{
    public function index()
    {
        return view('base.index');
    }

    public function main()
    {
        return view('base.main');
    }
}
