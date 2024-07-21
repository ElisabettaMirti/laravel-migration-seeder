<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $trains = [
        //     [
        //         "azienda" => "Trenitalia",
        //         "stazione_di_partenza" => "Rimini",
        //         "stazione_di_arrivo" => "Roma",
        //         "orario_di_partenza" => "2024-07-18 06:00:00",
        //         "orario_di_arrivo" => "2024-07-18 09:00:00",
        //         "codice_treno" => 88679,
        //         "numero_carrozze" => 9,
        //         "in_orario" => 1,
        //         "cancellato" => 0,
        //     ]
        // ];

        for ($i=0; $i < 100; $i++) {
            $train = new Train();
            $train->azienda = $faker->words(2, true);
            $train->stazione_di_partenza = $faker->words(4, true);
            $train->stazione_di_arrivo = $faker->words(4, true);
            $train->orario_di_partenza = $faker->unique()->dateTimeThisMonth();
            $train->orario_di_arrivo = $faker->unique()->dateTimeThisMonth();
            $train->codice_treno = $faker->randomNumber(5, true);
            $train->numero_carrozze = $faker->randomNumber(2, true);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
