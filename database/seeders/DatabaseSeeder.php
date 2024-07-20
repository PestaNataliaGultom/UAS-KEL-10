<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Segment;
use App\Models\Showtime;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            MoviesTableSeeder::class,
            TheatersTableSeeder::class,
            StudiosTableSeeder::class,
            ShowtimesTableSeeder::class,
            SeatsTabelSeeder::class,
            // TicketsTableSeeder::class,
            // PaymentsTableSeeder::class,
        ]);
        
    }
}
