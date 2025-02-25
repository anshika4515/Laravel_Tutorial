<?php

namespace Database\Seeders;

use App\Models\hobby;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hobbies = collect( [   //work as foreach loop
            [
                'name' => 'Anshika',
                'hobby' => 'cricket',
                'time'=> 3
            ],
            [
                'name' => 'Verma',
                'hobby' => 'cooking',
                'time' => 12
            ],
            [
                'name' => 'kartik',
                'hobby' => 'play',
                'time' => 2
            ],
            [
                'name' => 'Adiya',
                'hobby'=> 'jaming',
                'time' => 9
            ],
            [
                'name' => 'lara',
                'hobby' => 'yapping',
                'time' => 19
            ]
            ]);
            $hobbies->each(function($user){
               hobby::insert($user);
            });
    }
}
