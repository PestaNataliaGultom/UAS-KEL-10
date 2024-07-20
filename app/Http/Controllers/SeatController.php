<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\Showtime;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function showSeats($showtimeId)
    {
        $showtime = Showtime::with(['movie', 'studio.theater', 'studio.seats'])->findOrFail($showtimeId);

        $movieTitle = $showtime->movie->title;
        $studioName = $showtime->studio->name;
        $theaterName = $showtime->studio->theater->name;
        $seats = $showtime->studio->seats;

        // Kirim data kursi ke view
        return view('seats.layout', compact('movieTitle', 'studioName', 'theaterName', 'seats', 'showtime'));
    }
    public function confirm(Request $request)
    {
        // dd($request);
        $selectedSeats = $request->input('seats');
        $showtimeId = $request->input('showtimeId');

        // Lakukan logika booking di sini, misalnya menyimpan data booking ke database
        // return dd($request);
        return response()->json(['message' => 'Booking confirmed!'], 200);
    }
}
