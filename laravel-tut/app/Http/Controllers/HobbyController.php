<?php

namespace App\Http\Controllers;

use App\Models\hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    //findorfail
    // public function index(){
    //     $hobby = hobby::findorfail(1);   //if exits give data else give 404 not found 
    //     return $hobby;
    // }


    //chunk()
    // public function index(){
    //     hobby::chunk(2,function($hobby){
    //         foreach($hobby as $h){
    //            echo  $h->name;
    //             echo $h->hobby;
    //            echo  $h->time;
    //         }
    //         echo "\n";
    //     });   //if exits give data else give 404 not found 
    //}
  
    //lazy()
    // public function index()
    // {
    //     foreach (hobby::lazy()  as $h) {
    //         echo  $h->name;
    //         echo $h->hobby;
    //         echo  $h->time;
    //     }
        
    // }

    public function index()
    {
        foreach (hobby::cursor()  as $h) {
            echo  $h->name;
            echo $h->hobby;
            echo  $h->time;
        }
        
    }
}
