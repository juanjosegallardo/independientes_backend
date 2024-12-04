<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evaluacion;

class EvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Evaluacion::factory()->count(500)->create();
    }

}
