<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BaseController@index');
Route::auth();

Route::get('/home', 'HomeController@index');
<<<<<<< HEAD
=======


// API INTERESTS
Route::get('/api/interests/get', 'Api\InterestsController@get');
>>>>>>> 3723e0e81097768aa7a235cb0ce66a2797ca4788
