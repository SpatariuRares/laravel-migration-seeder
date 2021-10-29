<?php

use Illuminate\Database\Seeder;
use App\trip;
use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;
class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create('it_IT');
        for($i=0;$i<100;$i++){
            $newtrip = new trip();
            $newtrip->destination=$faker->city('it_IT');
            $newtrip->departure=$faker->date('Y_m_d');
            $newtrip->return=$faker->date('Y_m_d');
            $newtrip->price=$faker->randomNumber(4, false);;
            $newtrip->save();
        }
    }
}
