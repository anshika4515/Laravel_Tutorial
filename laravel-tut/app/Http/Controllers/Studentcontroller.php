<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Studentcontroller extends Controller
{
    public function showStudents(){
        $students = DB::table('students')->orderBy('name')->get();
        return view('allusers',['data'=>$students]);
      //  $students = DB::table('students')->pluck('name');
    }
    public function showSingleUser(string $id){
        $student = DB::table('students')->where('id',$id)->get();
        return view('singleusers',['data'=>$student]);
    }
    public function addUser(){
        $student = DB::table('students')
                   ->insert([
                     'name' => 'Ans',
                     'cities' => 'delhio',
                     'created_at' => now(),
                     'updated_at' => now()
                   ]);
    }
    public function updateUser(string $id){
        $student = DB::table('students')->where('id',$id)
                   ->update([
                    'cities'=>'yamunanagar'
                   ]);

    }
    public function deleteUser(string $id){
        $student = DB::table('students')->where('id',$id)
                   ->delete();
        if($student){
            return redirect()->route('home');
        }
    }
}

//whereNotNull 
//whereIn
//whereOr
//upsert -> mainly used to update the existing record in database