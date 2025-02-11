<?php

use App\Http\Controllers\FriendController;
use App\Http\Controllers\Studentcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Student;

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

// Route::get('/test',function(){
//     return view('test');
// });

//pass the value from route to view
// Route::get('/users',function(){
//     return view('users',["user"=>"Anshika" , "city"=>"Delhi"]);
// });
//we can do it like this also
Route::get('/users',function(){
    return view('users')->with('user',"Ashikaa")->with('city',"yng");
});
// if no page of that route is there
Route::fallback(function(){
    return "<h1>NO file of this</h1>";
}); 

/// ---- for controller learn ---///
// Route::get('/learn-controller',[UserController::class,'showUser']);
// Route::get('/learn-controller1}',[UserController::class,'showHome'])->name('home');
// Route::get('/learn-controller/{id}',[UserController::class,'showUser'])->name('users');
// Route::get('/learn-controller/post',[UserController::class,'showPost'])->name('post');


Route::controller(UserController::class)->group(function(){
    Route::get('/learn-controller1}','showHome')->name('home');
Route::get('/learn-controller/{id}','showUser')->name('users');
Route::get('/learn-controller/post','showPost')->name('post');
});


Route::get('showUsers',[Studentcontroller::class,'showStudents'])->name('home');

Route::get('showUsers/{id}',[Studentcontroller::class,'showSingleUser']);
Route::get('addUsers',[Studentcontroller::class,'addUser']);
Route::get('updateUsers/{id}',[Studentcontroller::class,'updateUser']);
Route::get('deleteUsers/{id}',[Studentcontroller::class,'deleteUser']);

//dd() ->debug information
Route::get('friends',[FriendController::class,'showAll']);
Route::view('addfriends','friends.addfriend');
// Route::post('addFriend',[FriendController::class,'addFriend'])->name('addFriend');  //main route
Route::post('addFriend',[FriendController::class,'addFriendData'])->name('addFriend');  //for checking customized rules 
Route::view('updatefriends','friends.updatefriend');
Route::get('updateFriend/{id}',[FriendController::class,'updateFriend'])->name('updateFriend');
Route::post('updateFriendData/{id}',[FriendController::class,'updateFriendData'])->name('updateFriendData');

Route::get('show',[FriendController::class,'show']);
Route::get('insert',[FriendController::class,'insertData']);
Route::get('update',[FriendController::class,'updateData']);
Route::get('delete',[FriendController::class,'deleteData']);
Route::get('selectRawData',[FriendController::class,'rawData']);