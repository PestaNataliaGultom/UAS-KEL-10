@extends('layouts.app')
@section('title', 'Theater on Bandung')
@section('content')
    {{-- Theater Place --}}
    <section id="theater">
        <img src="{{ asset('assets/images/discover/msite7.jpg') }}" class="img-fluid" height="60" alt="">
        <div class="container mb-5 py-4">
            <img src="assets/images/favicon.png" alt="favicon" class="my-2">
            <h1 class="display-5 fw-bold">LOKASI BIOSKOP</h1>
            <div class="col-lg-6">
                <p class="lead mb-4">Gak bingung lagi cari dimana lokasi bioskop terdekat dengan kamu.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">City</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($theaters as $theater)
                                <tr>
                                    <td>{{ $theater->name }}</td>
                                    <td>{{ $theater->city }}</td>
                                    <td>{{ $theater->address }}</td>
                                    <td class="text-nowrap">{{ $theater->telephone }}</td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('theater.show', $theater->id) }}" class="btn btn-primary btn-sm">
                                            Let's Go!
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
