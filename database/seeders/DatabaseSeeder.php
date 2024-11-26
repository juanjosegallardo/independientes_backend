<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\RubricaSeeder;
use Database\Seeders\CriterioSeeder;
use Database\Seeders\CategoriaSeeder;
use Database\Seeders\AtributoSeeder;

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
        ]);
    }
}
