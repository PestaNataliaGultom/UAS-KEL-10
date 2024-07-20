@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset($movie->photo) }}" alt="play-now">
            </div>
            <div class="col-md-8">
                <h1>{{ $movie->title }}</h1>
                <p>Genre: {{ $movie->genre }}</p>
                <div class="d-flex gap-2">
                    <a href="{{ $movie->playing == 'upcoming' ? '#' : route('movie.theater', $movie->id) }}" class="btn btn-primary mb-3" >Buy
                        Ticket</a>
                    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#trailerModal">Trailer</button>
                </div>
                <p>{{ $movie->synopsis }}</p>
                <p>Duration: {{ $movie->duration }} minutes</p>
                <p>Director: {{ $movie->director }}</p>
                <p>Cast: {{ $movie->cast }}</p>
            </div>
        </div>

        <!-- Theaters Modal -->
        <div class="modal fade" id="theatersModal" tabindex="-1" aria-labelledby="theatersModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="theatersModalLabel">Theaters Showing</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <h5 class="fw-bold fs-3">{{ $movie->title }}</h5>
                            <p class="w-100">Today : {{ \Carbon\Carbon::now('asia/jakarta')->format('D, d M Y') }}</p>
                        </div>
                        <ul class="list-group">
                            @foreach ($theaters as $theater)
                                @if ($theater->studios->pluck('showtimes')->flatten()->isNotEmpty())
                                    <li class="list-group-item flex-wrap fw-bold fs-4">
                                        {{ $theater->name }}
                                        <p class="fs-6 fw-normal">{{ $theater->address }}</p>
                                        <div class="d-flex flex-wrap gap-2">
                                            @foreach ($theater->studios as $studio)
                                                @foreach ($studio->showtimes as $showtime)
                                                    <a href="#"class="fs-6 fw-normal border rounded px-4 py-2 text-decoration-none text-dark">{{ \Carbon\Carbon::parse($showtime->show_time)->format('H:i') }}</a>
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trailer Modal -->
        <div class="modal fade" id="trailerModal" tabindex="-1" aria-labelledby="trailerModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="trailerModalLabel">Trailer for "{{ $movie->title }}"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $movie->trailer }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
