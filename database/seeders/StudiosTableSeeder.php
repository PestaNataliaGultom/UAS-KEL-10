<?php

namespace Database\Seeders;

use App\Models\Studio;
use App\Models\Theater;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class StudiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $theaters = Theater::all();

        foreach($theaters as $theater) {
            foreach(range(1, 2) as $index) {
                Studio::create([
                    'theater_id' => $theater->id,
                    'name' => "Studio $index",
                    'capacity' => 40,
                ]);
            }
        }
    }
}
