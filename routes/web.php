<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show','Crud@index');
Route::get('/detail/{id}','Crud@show'); 
Route::get('/insert','Crud@create');
Route::post('/save','Crud@store');
Route::get('/delete/{id}','Crud@destroy');
Route::post('/update','Crud@update');

