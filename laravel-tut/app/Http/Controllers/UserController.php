<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //method
    public function showHome(){
       return "<h1>Welcome to laravel prep</h1>";
    }
    //with view
    //passing value through contrller
    // public function showUser(string $id){
    //     return view('users',['id'=>$id]);
    // }
    //can also use compact
    public function showUser(string $id){
        return view('users',compact('id'));
    }
    public function showPost(){
        return view('firstpost');
    }
}
