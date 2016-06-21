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

Route::get('/', function () {
    // $people = [];
    $people = ["Chelsea", "Bryan", "Penny", "Caia"];
    return view('welcome', compact('people')); // can also do ['people' => $people]);
});

Route::get('/about', function () {
    return view('pages/about'); //just in the pages directory
});

// Route::get('/', 'PagesController@home') //going to a controller
