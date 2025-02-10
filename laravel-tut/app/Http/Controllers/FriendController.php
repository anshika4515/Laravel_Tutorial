<?php

namespace App\Http\Controllers;

use Dotenv\Util\Str;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller
{
    public function showAll()
    {
        //$friendsData = DB::table('friends')->Paginate(4);
        $friendsData = DB::table('friends')->orderBy('id')->cursorPaginate(4);
        return view('friends.friend', ['data' => $friendsData]);
    }
    public function addFriend(Request $request)
    {
        $friendsData = DB::table('friends')
            ->insert([
                'name' => $request->username,
                'age' => $request->age,
                'city' => $request->city
            ]);
        if ($friendsData) {
            echo "<h1>Success</h1>";
        } else {
            echo "<h1>NO</h1>";
        }
    }
    public function updateFriend(string $id)
    {
        $friendsData = DB::table('friends')->find($id);
        return view('friends.updatefriend', ['data' => $friendsData]);
    }
    public function updateFriendData(Request $request , $id)
    {
        $friendsData = DB::table('friends')->where('id',$id)
            ->update([
                'name' => $request->username,
                'age' => $request->age,
                'city' => $request->city
            ]);
        if ($friendsData) {
            echo "<h1>Success</h1>";
        } else {
            echo "<h1>NO</h1>";
        }
    }
}

//Types of pagination
// -> simplePaginate
// -> Paginate
// -> cursorPaginate