<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PostController extends Controller
{

    public function index(){
        $post = Post::find(2);
        return $post;
    }
    
    public function create(){
       $post_title = "This is another testing";
       $post_slug = Str::slug($post_title,"-");
       Post::create([
            'title' => $post_title,
            'description' => "Lorem, ipsum dolor ",
            'user_id' => 2,
       ]);
    }
}
