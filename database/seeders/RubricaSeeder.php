<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rubrica;

class RubricaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rubricas = [ 
            ["id"=>1, "nombre"=>"Rúbrica General"  ]
        ];

        foreach($rubricas as $rubrica)
        {
            Rubrica::create($rubrica);
        }
    }
}
