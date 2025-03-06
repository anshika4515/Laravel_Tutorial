<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $user = User::get();
        \Log::info($user);
        return view('file-upload',compact('user'));
    }
    public function store(Request $request){
        $file = $request->file('photo');
         $request->validate([
           'photo'=>'required|mimes:png,jpg,jpeg|max:3000'
         ]);
         $path = $request->file('photo')->store('image','public');
         User::create([
            'file-name' => $path
         ]);
         return redirect()->route('image.index')->with('status','User image uploaded successfully');
    }
    public function destroy(string $id){
       $user = User::find($id);
       $user->delete();
       $image_path = public_path("/storage/") . $user->file-name;
       //used to delete the image data from db
       if(file_exists($image_path)){
        @unlink($image_path);
       }
    }
}


// php artisan storage:link