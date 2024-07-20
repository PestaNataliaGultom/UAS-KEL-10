@extends('layouts.app')
@section('title', 'Now Playing Movie')
@section('content')
    @php
        $items = [10];
    @endphp
    {{-- Discover --}}
    <section id="hero">
        <div>
            <img src="{{ asset('assets/images/discover/msite5.jpg') }}" class="img-fluid" height="60" alt="">
        </div>
    </section>
    {{-- Now Playing --}}
    <section id="now">
        <div class="bg-dark text-secondary py-4 mb-5">
            <div class="container">

                <img src="assets/images/favicon.png" alt="favicon" class="my-2">
                <h1 class="display-5 fw-bold text-white">SEDANG TAYANG</h1>
                <div class="col-lg-6">
                    <p class="lead mb-4">Temukan film favorit kamu dan tonton bersama orang tersayang.</p>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center d-flex flex-wrap">
                    @foreach ($nowPlayingMovies as $movie)
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
    </section>
    {{-- About --}}
    <section id="about">
        <div class="container-fluid bg-dark text-white text-center px-4 py-5">
            <div class="col-lg-6 col-md-9 col-12 d-flex flex-column gap-4 mx-auto">
                <div>
                    <img src="assets/images/favicon.png" alt="favicon" class="my-2">
                </div>
                <div>
                    <h2 class="fs-1">MYBIOSKOP APP</h2>
                    <p class="mb-0">Dibuat dengan laravel 11 dan Bootstrap 5</p>
                </div>
                <div>
                    <div class="row mt-3 gap-3 justify-content-center">
                        <div class="card border-primary bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header text-white"><i class="fa fa-solid fa-film fa-xl"></i></div>
                            <div class="card-body text-primary">
                                <h5 class="card-title">Get our favorite movie</h5>
                                <p class="card-text">with prefered user and most choose</p>
                            </div>
                        </div>
                        <div class="card border-primary bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header text-white"><i class="fa fa-solid fa-user-friends fa-xl"></i></div>
                            <div class="card-body text-primary">
                                <h5 class="card-title">Watch movie with firends</h5>
                                <p class="card-text">get experience with friends together</p>
                            </div>
                        </div>
                        <div class="card border-primary bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header text-white"><i class="fa fa-solid fa-fire fa-xl"></i></div>
                            <div class="card-body text-primary">
                                <h5 class="card-title">Hot trending theater</h5>
                                <p class="card-text">reach other feature your favorite theater</p>
                            </div>
                        </div>
                        <div class="card border-primary bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header text-white"><i class="fa fa-solid fa-ticket-alt fa-xl"></i></div>
                            <div class="card-body text-primary">
                                <h5 class="card-title">Buy ticket online</h5>
                                <p class="card-text">get ticket and book seats online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
