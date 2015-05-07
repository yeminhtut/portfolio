<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('login', array('uses' => 'AuthController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'AuthController@doLogin'));

Route::get('logout', array('uses' => 'AuthController@doLogout'));

/*static Pages*/

Route::get('/', function()
{
    return View::make('Pages.home');
});
Route::get('about', function()
{
    return View::make('Pages.about');
});
Route::get('projects', function()
{
    return View::make('Pages.projects');
});
Route::get('contact', function()
{
    return View::make('Pages.contact');
});
Route::resource('blogs', 'BlogController');
