<?php

namespace Database\Seeders;

use App\Models\Friend;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $friends = collect( [   //work as foreach loop
          [
              'name' => 'Anshika',
              'age'=>23,
              'city' => 'delhi'
          ],
          [
              'name' => 'Verma',
              'age' => 12,
              'city' => 'yng'
          ],
          [
              'name' => 'kartik',
              'age' => 20,
              'city' => 'rajpura'
          ],
          [
              'name' => 'Adiya',
              'age' => 23,
              'city'=> 'pune'
          ],
          [
            'name' => 'sharma',
            'age' => 24,
            'city' => 'amritsar'
          ]
  
          ]);
          $friends->each(function($friend){
             Friend::insert($friend);
          });
    }
}
