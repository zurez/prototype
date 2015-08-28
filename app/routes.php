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

Route::get('builder',array("as"=>'builder','uses'=>'GameController@index'));
Route::get('game/',array("as"=>'game','uses'=>'GameController@game'));