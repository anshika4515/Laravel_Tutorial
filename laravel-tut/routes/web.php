<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//get method
// Route::get('/post',function(){
//     return view('post');
// });
// Route::get('/about',function(){
//     return view('about');
// });

// //view method
// Route::view('post','/post');

// Route::get('/post/firstpost',function(){
//     return view('firstpost');
// });
// Route::view('/first','first');
// Route::get('/firstOther',function(){
//     return view('first');
// });


//laravel route parameter 
// Route::get('/post/{id}', function ($id) {
//     return "<h1>Post ID: " . $id . "</h1>";
// });

// //optional parameter
// Route::get('/post/{id?}', function ($id=null) {
//     return "<h1>Post ID: " . $id . "</h1>";
// });
// //multiple parameter
// Route::get('/post/{id?}/comment/{comment?}',function($id=null , $comment=null){
//    return "<h1>Post Id:" . $id . $comment. "</h1>";
// });

//route validation
// Route::get('/post/{id}', function ($id) {
//     return "<h1>Post ID: " . $id . "</h1>";
// })->whereNumber('id');
// can also use 
// ->whereAlpha();
// ->whereAlphaNumeric();
// ->whereIn('category',['m','s']);
// ->where('id','[@0-9]+');  -> for regular expression


//laravel named routes  //no need to chnge the name again
// -> can use same routes for different files

Route::get('postyes',function(){
    return view('post');
})->name('mypost');

Route::get('/test',function(){
    return view('about');
});
//use redirection
Route::redirect('/about','/test');

//laravel route groups
Route::prefix('page')->group(function(){
   Route::get('/gallery',function(){
    return "<h1>Gallery Page</h1>";
   });
   Route::get('/firstpost',function(){
    return "<h1>FIrst Post AGain</h1>";
   });
});

// if no page of that route is there
Route::fallback(function(){
    return "<h1>NO file of this</h1>";
});