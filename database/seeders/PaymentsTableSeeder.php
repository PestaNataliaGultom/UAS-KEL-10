<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\Payment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $tickets = Ticket::all();

        foreach($tickets as $ticket) {
            Payment::create([
                'ticket_id' => $ticket->id,
                'payment_method' => $faker->randomElement(['Credit Card', 'Bank Transfer', 'E-Wallet']),
                'amount' => $faker->randomFloat(2, 50000, 150000),
                'payment_date' => $faker->dateTimeBetween('-1 month', 'now'),
            ]);
        }
    }
}
