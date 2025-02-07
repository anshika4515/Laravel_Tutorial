<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = collect( [   //work as foreach loop
          [
            'name' => 'Anshika',
            'cities' => 'delhi'
        ],
        [
            'name' => 'surjeet',
            'cities' => 'yng'
        ],
        [
            'name' => 'kartik',
            'cities' => 'rajpura'
        ]

        ]);
        $students->each(function($student){
           student::insert($student);
        });
        // Student::create([
        //     'name' => 'Anshika',
        //     'cities' => 'delhi'
        // ]);
    }
}

//$students = collect(json_decode($json)) //chnge json to array

//while using file path er have to use ->  create function only
    // Student::create([
        //     'name' => 'Anshika',
        //     'cities' => 'delhi'
        // ]);

//to get fake columns by default
// Student::create({
//     'name'=>fake()->name();
//     'email'=>fake()->email();
// })