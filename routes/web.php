<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//AUTHOR INDEX
Route::get('/authors','AuthorController@index');
//Route::get('/authors', [App\Http\Controllers\AuthorController::class, 'index'])->name('index');

//AUTHOR STORE
Route::post('/authors','AuthorController@store');

//AUTHOR SHOW
Route::get('/authors/{author}','AuthorController@show');

//AUTHOR UPDATE
Route::put('/authors/{author}','AuthorController@update');

//AUTHOR DESTROY
Route::patch('/authors/{author}','AuthorController@destroy');
