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
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', 'BaseController@index');
});

Route::group(['middleware' => ['auth']], function () {

    // API INTERESTS
    Route::get('/api/interests/get', 'Api\InterestsController@get');

    // API MESSAGES
    Route::get('/api/messages/get', 'Api\MessagesController@get');

    // API SETTINGS
    Route::patch('/api/settings/avatar', 'Api\SettingsController@avatar');
    
    Route::get('/profile', 'BaseController@profile');

    // API FRIENDS
    Route::get('/api/friends/getusers', 'Api\FriendsController@getUsers'); 
    Route::get('/api/friends/getinvites', 'Api\FriendsController@getInvites'); 
    Route::get('/api/friends/getfriends', 'Api\FriendsController@getFriends'); 
    Route::get('/api/friends/delfriend/{id}', 'Api\FriendsController@deleteFriend'); Route::put('/api/friends/invite/{id}', 'Api\FriendsController@inviteFriend'); Route::get('/api/friends/sendrequest/{id}', 'Api\FriendsController@sendRequest');
});

Route::auth();

