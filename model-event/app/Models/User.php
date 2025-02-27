<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function post(){
        return $this->hasMany(Post::class);
    }


    //using model event
    //when we delete from user it automatically deletes from post
    //we can also do this in observe file will doing this
    // protected static function booted() : void
    // {
    //      static::deleted(function($user){
    //         $user->post()->delete();
    //      });
    // }
}
