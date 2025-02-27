<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::with('post')->get();
        return $user;
    }
    
   
    public function delete(){
        $user = User::find(4)->delete();
    }

}
