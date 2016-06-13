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
Route::get('/profile', 'BaseController@profile');
Route::auth();

Route::get('/home', 'HomeController@index');


// API INTERESTS
Route::get('/api/interests/get', 'Api\InterestsController@get');

// API MESSAGE
Route::get('/api/messages/get', 'Api\MessagesController@get');

Route::post('/api/messages/create', [
        'uses' => 'Api\MessagesController@postCreateMessage', 
        'as' => 'message.create'
        ]);

// API EVENTS
