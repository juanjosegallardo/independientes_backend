<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =[
            ["name"=> "Israel Tierrablanca Murillo" ,"email"=>"admin", "password"=> Hash::make('qwerty123'), "role"=>"ROOT"],
            ["name"=> "Juan José Gallardo Mendoza" ,"email"=>"juanjo", "password"=> Hash::make('qwerty123'), "role"=>"ADMIN"],
            ["name"=> "Juez 1 Demo" ,"email"=>"juez1", "password"=> Hash::make('qwerty123'), "role"=>"JUEZ"],
            ["name"=> "Juez 2 Demo" ,"email"=>"juez2", "password"=> Hash::make('qwerty123'), "role"=>"JUEZ"],
        ];
        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}
