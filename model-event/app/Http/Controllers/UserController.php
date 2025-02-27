<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // LOCAL SCOPE
    // public function index(){
    //     $user = User::with('post')
    //            ->active()  //scope used here  //local scope
    //            ->get();
    //     return $user;
    // }
    
    //GLOBAL SCOPE  -> no need to declare bcz as event it is using booted func generate automticlly 
    public function index(){
        $user = User::with('post')->get();
        return $user;
    }
    

    //we are using events here
    public function delete(){
        $user = User::find(4)->delete();
    }

}
