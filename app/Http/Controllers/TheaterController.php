<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Movie;
use App\Models\Theater;
use App\Models\Showtime;
use Illuminate\Http\Request;

class TheaterController extends Controller
{
    public function show($id)
    {
        $theater = Theater::with(['studios.showtimes' => function ($query) {
            $query->whereHas('movie', function ($movieQuery) {
                $movieQuery->where('playing', 'now');
            });
        }])->findOrFail($id);

        $movies = $theater->studios->flatMap(function ($studio) {
            return $studio->showtimes->map(function ($showtime) {
                return $showtime->movie;
            });
        })->filter(function ($movie) {
            return !is_null($movie);
        })->unique('id');


        // dd($movies);

        return view('theater.show', compact('theater', 'movies'));
    }
}
