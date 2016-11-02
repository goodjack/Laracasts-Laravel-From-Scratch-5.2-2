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
    return view('welcome');
});

Route::get('begin', function() {
    //Session::flash('status', 'Hello There');
	/* Move to app/helpers.php
	session()->flash('flash_message', 'You are now logged in.');
	session()->flash('flash_message_level', 'info');
	*/
	//flash('You are now signed in!', 'danger');
	flash('You are now signed in!');

    /*
    Session::put('foo', 'bar');
    session(['foo' => 'bar']);

    Session::get('foo') // bar
    session('foo')
    */

    // return Redirect::to('/');
    return redirect('/');
});

Route::auth();

Route::get('dashboard', 'HomeController@index');
// Route::get('home', 'HomeController@index')->middleware('auth');

Route::get('cards', 'CardsController@index');
Route::get('cards/create', 'CardsController@create');
Route::get('cards/stores/{store}', 'CardsController@store');
