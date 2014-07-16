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

Route::get('/', function()
{
	return View::make('index');
});


Route::get('/RUG', function()
{
	$query = Input::get('NumUser');
	$error = "yes";
	if(($query>="0" && $query<="99") || $query==""){
		$error = "no";
	}
	else{
		$query = "0";
	}
	
	return View::make('RandomUser')
			   ->with('NumUser', $query)
			   ->with('error', $error);
});

Route::get('/LIG', function()
{
	$query = Input::get('NumPara');
	$error = "yes";
	if(($query>="0" && $query<="99") || $query==""){
		$error = "no";
	}
	else{
		$query = "0";
	}
	
	return View::make('Lorem')
			   ->with('NumPara', $query)
			   ->with('error', $error);
});