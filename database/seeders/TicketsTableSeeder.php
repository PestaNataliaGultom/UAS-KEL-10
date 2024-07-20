<?php

namespace Database\Seeders;

use App\Models\Seat;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Showtime;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $users = User::all();
        $showtimes = Showtime::all();
        $seats = Seat::all();

        foreach ($users as $user) {
            foreach ($showtimes as $showtime) {
                foreach ($seats as $seat) {
                    Ticket::create([
                        'user_id' => $user->id,
                        'showtime_id' => $showtime->id,
                        'seat_id' => $seat->id,
                        'price' => 30000,
                    ]);
                }
            }
        }
    }
}
