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


//API FRIENDS
Route::get('/api/friends/get', 'Api\FriendsController@get');
Route::get('/api/friends/getusers/{search}', 'Api\FriendsController@getUsers');
Route::get('/api/friends/getinvites', 'Api\FriendsController@getInvites');
Route::get('/api/friends/getfriends', 'Api\FriendsController@getFriends');
Route::get('/api/friends/delfriend/{id}', 'Api\FriendsController@deleteFriend');
Route::get('/api/friends/invitefriend/{id}', 'Api\FriendsController@inviteFriend');
Route::get('/api/friends/sendrequest/{id}', 'Api\FriendsController@sendRequest');

// API EVENTS

