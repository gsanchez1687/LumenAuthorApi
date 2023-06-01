<?php

use Illuminate\Support\Facades\Route;

//AUTHOR INDEX
Route::get('/api/v1/authors','AuthorController@index');

//AUTHOR STORE
Route::post('/api/v1/authors','AuthorController@store');

//AUTHOR SHOW
Route::get('/api/v1/authors/{author}','AuthorController@show');

//AUTHOR UPDATE
Route::put('/api/v1/authors/{author}','AuthorController@update');

//AUTHOR DESTROY
Route::patch('/api/v1/authors/{author}','AuthorController@destroy');
