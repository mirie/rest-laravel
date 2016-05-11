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

// Leaving this here as is as this isn't part of the exercise.
Route::get('/', function () {
    return view('welcome');
});

// Article Controller for RESTful API with versioning.
// Restrict this to only GET requests for lists of Articles and a retrieving a
// single Article.
Route::resource('api/v1/articles', 'ArticleController',
  ['only' => ['index', 'show']]);
