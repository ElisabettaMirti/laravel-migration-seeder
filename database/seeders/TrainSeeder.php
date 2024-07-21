<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                "azienda" => "Trenitalia",
                "stazione_di_partenza" => "Rimini",
                "stazione_di_arrivo" => "Roma",
                "orario_di_partenza" => "2024-07-18 06:00:00",
                "orario_di_arrivo" => "2024-07-18 09:00:00",
                "codice_treno" => 88679,
                "numero_carrozze" => 9,
                "in_orario" => 1,
                "cancellato" => 0,
            ]
        ];

        foreach ($trains as $trainData) {
            $train = new Train();
            $train->azienda = $trainData['azienda'];
            $train->stazione_di_partenza = $trainData['stazione_di_partenza'];
            $train->stazione_di_arrivo = $trainData['stazione_di_arrivo'];
            $train->orario_di_partenza = $trainData['orario_di_partenza'];
            $train->orario_di_arrivo = $trainData['orario_di_arrivo'];
            $train->codice_treno = $trainData['codice_treno'];
            $train->numero_carrozze = $trainData['numero_carrozze'];
            $train->in_orario = $trainData['in_orario'];
            $train->cancellato = $trainData['cancellato'];
            $train->save();
        }
    }
}
