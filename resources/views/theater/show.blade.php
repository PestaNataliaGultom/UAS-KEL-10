@extends('layouts.app')
@section('title', "$theater->name")
@section('content')
    <div class="container-fluid py-5 bg-dark text-white">
        <div class="col-md-6 mx-auto text-center">
            <img src="{{ asset('assets/images/favicon.png') }}" alt="favicon" class="my-2">
            <h1 class="display-5 fw-bold text-white">{{ $theater->name }}</h1>
            <p class="lead">{{ $theater->address }}</p>
            <p class="lead">{{ $theater->city }}</p>
            <p class="lead mb-4"><i class="fas fa-phone-alt"></i> {{ $theater->telephone }}</p>
        </div>
        <div class="col-md-6 mx-auto">
            <div class="card bg-dark text-white border-white">
                <div class="card-rounded">
                    <div class="card-body">
                        @foreach ($movies as $movie)
                            <div class="px-4 mt-4 d-flex gap-4">
                                <div>
                                    <img src="{{ asset($movie->photo) }}" width="120" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="card-title mb-2">{{ $movie->title }}</h4>
                                    <p>{{ $movie->genre }}</p>
                                    <p><i class="far fa-clock text-primary me-2"></i> {{ $movie->duration }} Minutes</p>
                                    <p class="fw-semibold btn btn-primary">Rp. {{ $theater->price }}</p>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center mt-2 pb-4 gap-2 border-bottom">
                                @foreach ($movie->showtimes as $showtime)
                                    <a href="{{ route('seats.layout', $showtime->id) }}" class="btn btn-outline-primary">{{ \Carbon\Carbon::parse($showtime->show_time)->format('H:i') }}</a>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
