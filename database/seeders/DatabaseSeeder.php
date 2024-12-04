<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\RubricaSeeder;
use Database\Seeders\CriterioSeeder;
use Database\Seeders\CategoriaSeeder;
use Database\Seeders\AtributoSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CompetenciaSeeder;
use Database\Seeders\EvaluacioSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            RubricaSeeder::class,
            CriterioSeeder::class,
            UserSeeder::class,
            CategoriaSeeder::class,
            AtributoSeeder::class,
            CompetenciaSeeder::class,
            EvaluacionSeeder::class,
        ]);
    }
}
