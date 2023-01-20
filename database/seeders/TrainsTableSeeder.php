<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        $new_train=new Train();

        $new_train->company= $faker->company();
        $new_train->departure_station= $faker->city();
        $new_train->arrival_station= $faker->city();
        //finchè partenza e arrivo sono uguali mi rigeneri la città di arrivo
        while($new_train->departure_station == $new_train->arrival_station){
            $new_train->arrival_station= $faker->city();
        }
        $new_train->departure_time= $faker->dateTimeBetween('-1 days', '+2 days');
        $new_train->arrival_time= $faker->dateTimeBetween($new_train->departure_time, '+2 days');
        $new_train->train_code= $faker->bothify('?????-#####');
        $new_train->carriage= rand(1,10);
        $new_train->in_time= $faker->boolean(80);
        $new_train->cancelled= $faker->boolean(10);

        $new_train->save();
    }
}
