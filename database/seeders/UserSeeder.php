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
            ["name"=> "Israel" ,"email"=>"admin", "password"=> Hash::make('qwerty123'), "role"=>"ADMIN"]
        ];
        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}
