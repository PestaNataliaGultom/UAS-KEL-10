<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Studio;
use App\Models\Showtime;
use App\Models\Theater;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class ShowtimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $movies = Movie::all();
        $studios = Studio::all();

        foreach ($movies as $movie) {
            foreach ($studios as $studio) {
                Showtime::create([
                    'movie_id' => $movie->id,
                    'studio_id' => $studio->id,
                    'show_time' => $faker->dateTimeBetween('09:00:00', '20:00:00'),
                ]);
            }
        }
    }
}
