<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Movie;
use App\Models\Showtime;
use App\Models\Theater;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $today = Carbon::today('asia/jakarta');

        $theaters = Theater::with(['studios.showtimes' => function($query) use ($today) {
            $query->whereDate('show_time', $today);
        }, 'studios.showtimes.movie'])->get();

        return view('movie.show', compact('movie', 'theaters'));
    }
    public function theater($movieId)
    {
        $movie = Movie::findOrFail($movieId);

        $theaters = Theater::with(['studios.showtimes' => function($query) use ($movieId) {
            $query->where('movie_id', $movieId);
        }, 'studios.showtimes.movie'])->get();

        return view('movie.theater', compact('theaters', 'movie'));
    }
}
