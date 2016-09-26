<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Log; 

Route::get('/', function () {
    // Log::debug($_SERVER);
    // Log::info('Hello ', ['name' => 'Test']);
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
