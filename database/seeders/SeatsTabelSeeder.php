<?php

namespace Database\Seeders;

use App\Models\Seat;
use App\Models\Studio;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeatsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studios = Studio::all();

        // Iterasi setiap studio
        foreach ($studios as $studio) {
            // Dapatkan kapasitas studio
            $capacity = $studio->capacity;

            // Buat seat berdasarkan kapasitas
            for ($i = 1; $i <= $capacity; $i++) {
                Seat::create([
                    'studio_id' => $studio->id,
                    'number' => $i,
                    'is_available' => true, // Atur sesuai kebutuhan Anda
                ]);
            }
        }
    }
}
