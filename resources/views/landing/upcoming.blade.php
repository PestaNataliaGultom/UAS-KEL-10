@extends('layouts.app')
@section('title', 'Up Coming Movies')
@section('content')
    <div class="bg-dark text-secondary py-4 mb-5 text-center">
        <img src="assets/images/favicon.png" alt="favicon" class="my-2">
        <h1 class="display-5 fw-bold text-white">AKAN TAYANG</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Tunggu film populer yang akan tayang dan saksikan bersama orang tersayang.</p>
        </div>
        <div class="container">
            <div class="row justify-content-center d-flex flex-wrap">
                @foreach ($upcomingMovies as $movie)
                    <div class="col-lg-2 mt-4 d-flex">
                        <a href="{{ route('movie.show', $movie->id) }}" style="text-decoration: none; width: 100%;">
                            <div class="card shadow-sm d-flex flex-column h-100">
                                <img src="{{ asset($movie->photo) }}" alt="play-now" class="card-img-top">
                                <div class="card-body d-flex flex-column">
                                    <h6>{{ $movie->title }}</h6>
                                    <p class="card-text">{{ $movie->director }}</p>
                                    <div class="mt-auto">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary" disabled>
                                                    {{ $movie->duration }}
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary" disabled>
                                                    Minutes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
