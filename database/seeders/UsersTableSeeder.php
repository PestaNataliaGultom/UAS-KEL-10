<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        User::create([
            'name' => 'Riska R',
            'email' => "riska@mail.com",
            'password' => Hash::make('password'),
            'phone' => $faker->phoneNumber,
        ]);
        User::create([
            'name' => 'Pesta Natalia',
            'email' => "pesta@mail.com",
            'password' => Hash::make('password'),
            'phone' => $faker->phoneNumber,
        ]);
        
    }
}
