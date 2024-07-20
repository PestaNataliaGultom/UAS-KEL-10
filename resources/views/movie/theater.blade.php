@extends('layouts.app')
@section('title', 'Theater Available')
@section('content')
    <div class="container-fluid py-5 bg-dark text-white">
        <div class="col-md-6 mx-auto text-center">
            <img src="{{ asset('assets/images/favicon.png') }}" alt="favicon" class="my-2">
            <h1 class="display-5 fw-bold text-white">THEATER AVAILABLE</h1>
            <p class="lead mb-4">Choose your favorite Theater to watch your favorite movie.</p>
        </div>
        <div class="col-md-6 mx-auto">
            <div class="card bg-dark text-white border-white">
                <div class="card-rounded">
                    <div
                        class="card-header d-flex justify-content-between p-4 align-items-center border-primary border-bottom">
                        <div class="ms-4">
                            <h6 class="card-title">{{ $movie->title }}</h6>
                            <p class="card-subtitle mb-2">{{ $movie->genre }}</p>
                            <p><i class="far fa-clock text-primary"></i> {{ $movie->duration }} Minutes</p>
                            <p><i class="fas fa-calendar text-primary"></i>
                                {{ \Carbon\Carbon::now('asia/jakarta')->format('D, d M Y') }}</p>
                        </div>
                        <img src="{{ asset($movie->photo) }}" class="img-fluid" width="100" alt="">
                    </div>
                    <div class="card-body">
                        @foreach ($theaters as $theater)
                            <div class="border-bottom p-4 d-flex justify-content-between">
                                <div class="col-md-8">
                                    <h4 class="card-title mb-2">{{ $theater->name }}</h4>
                                    <p><i class="fas fa-map-marker-alt text-primary me-2"></i> {{ $theater->address }}</p>
                                    <p><i class="fas fa-utensils text-primary me-2"></i> Food & Beverage</p>
                                    <div class="d-flex mt-4 gap-2">
                                        @foreach ($theater->studios as $studio)
                                            @foreach ($studio->showtimes as $showtime)
                                                <a href="{{ route('seats.layout', $showtime->id) }}"
                                                    class="btn btn-outline-primary">{{ \Carbon\Carbon::parse($showtime->show_time)->format('H:i') }}</a>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                                <div>
                                    <p class="fw-semibold btn btn-primary">Rp. {{ $theater->price }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
