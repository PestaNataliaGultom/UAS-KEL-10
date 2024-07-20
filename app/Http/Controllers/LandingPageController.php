<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Movie;
use App\Models\Theater;
use App\Models\Showtime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        $nowPlayingMovies = Movie::where('playing', '=', 'now')->get();

        $theaters = Theater::withCount('studios')->get();

        return view('landing.now-playing', compact('nowPlayingMovies', 'theaters'));
    }
    public function theater()
    {
        $theaters = Theater::withCount('studios')->get();

        return view('landing.theater', compact('theaters'));
    }
    public function upcoming()
    {
        $upcomingMovies = Movie::where('playing', '=', 'upcoming')->get();

        return view('landing.upcoming', compact('upcomingMovies'));
    }
}
