<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++){
            $newTravel = new Travel();
            $newTravel->destinazione = $faker->word();
            $newTravel->partenza = $faker->date();
            $newTravel->prezzo = $faker->numberBetween(200, 500);
            $newTravel->ritorno = $faker->date();
            $newTravel->save();
        }
    }
}