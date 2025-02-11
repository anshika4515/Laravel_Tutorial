<?php

namespace App\Http\Controllers;

use App\Http\Requests\FriendRequest;
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
    public function addFriend(FriendRequest $request)
    {
        // $request->validate([
        //     'username' => 'required',
        //     'age' => 'required|numeric',
        //     'city' =>'required'
        // ],[
        //     "username.required" => "put username",
        //     "username.numeric" => "requried numeric"
        // ]);
        return $request->all();
       // return $request->only(['name']); -> gives only name data
       // return $request->execpt(['age']) -> gives all data except age
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
    //raw Queries on database
    public function show(){   
        $friendsData = DB::select("select * from friends where id=?",[1]);
        $friendsData = DB::select("select * from friends where id=:id",['id'=>3]);  //name binding to avoid sql injection
        return $friendsData;
    }
    public function insertData(){
        $friends = DB::statement("drop table friends");   //the query that doesnt return anything so we use statement() here
        $friendsData = DB::insert("insert into friends (name,age,city) values (?,?,?)",["anshikaaa",12,"gurgaon"]);
        return $friendsData;
    }
    public function updateData(){
        $friendsData = DB::update("update friends set name='kartikverma' where id=?",[3]);
        return $friendsData;
    }
    public function deleteData(){
        $friendsData = DB::update("delete from friends where id=?",[3]);
        return $friendsData;
    }
    //raw method with query builder
    public function rawData(){
        $friend = DB::table('friends')
                  ->selectRaw('name')
                  ->whereRaw('age = 12')->get();
        return $friend;

    }
  
}


//can also user DB::raw()  -> anywhere
//Types of pagination
// -> simplePaginate
// -> Paginate
// -> cursorPaginate