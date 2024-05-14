<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_di_partenza' => $faker->city,
                'stazione_di_arrivo' => $faker->city,
                'orario_di_partenza' => $faker->dateTimeBetween('now', '+1 month'),
                'orario_di_arrivo' => $faker->dateTimeBetween('+1 month', '+2 month'),
                'codice_treno' => $faker->unique()->randomNumber(8),
                'posti_disponibili' => $faker->numberBetween(1, 100),
                'numero_carrozze' => $faker->numberBetween(1, 10),
                'in_orario' => $faker->boolean,
                'ritardo' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}
