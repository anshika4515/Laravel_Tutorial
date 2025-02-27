<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $tests = Test::get();
    //     foreach ($tests as $test) {
    //     echo $test->meta_data['name'];
    //    }

     //  $test->meta_data['name']['lastname'];  -> for nested data


        // $test = Test::whereJsonContains('meta_data->name','Anshika')->get();  //to search json data
        // return $test;
 

        //update in json data
        $test = Test::where('id',2)->update([
            'meta_data->name' => 'Ansh'
        ]);

        //remove any value in my json meta_data
        $test = Test::find(2);
        //collect is used to get the all data and thn forget used to remove that particular field from the meta data
        $test->meta_data = collect($test->meta_data)->forget('name');
        $test->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $test = new Test();
        $test->meta_data = [
           'name' => 'Anshika',
           'email' => 'anshika@email.com',
           'mobile_number' => '989631445'
        ];
        $test->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestController  $testController
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestController  $testController
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestController  $testController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestController  $testController
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
