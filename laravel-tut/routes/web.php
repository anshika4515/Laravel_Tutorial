<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//get method
Route::get('/post',function(){
    return view('post');
});

//view method
Route::view('post','/post');

Route::get('/post/firstpost',function(){
    return view('firstpost');
});