<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 10 ; $i++) { 
            $train = new Train();
            $train->society='USRail';
            $train->departure_station= $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTime();
            $train->arrival_time = $faker->dateTime();
            $train->train_number = $faker->randomNumber(3, false);
            $train->coach_number = $faker->randomDigit();
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
    
            $train->save();
        }
       
    }
}
