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
        $city = Region::find(2)->city;
        return view('base.index', [
            'city' => $city
        ]);
    }
}
