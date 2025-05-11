<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/layout', function () {
    return view('layout');
});
