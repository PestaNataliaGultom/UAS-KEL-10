@extends('layouts.app')
@section('title', 'Payment Details')
@section('content')
    <div class="container">
        <div class="col-md-6 mx-auto py-4">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="card">
                <div class="card-rounder">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between p-2">
                            <img src="{{ asset('assets/images/vibes-logo.svg') }}" alt="">
                            <div class="text-end">
                                <span class="fs-3 fw-bold">#{{ $ticket->id }}</span>
                                <p class="m-0 fw-semibold">{{ \Carbon\Carbon::now('asia/jakarta')->format('D, d M Y') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body d-flex px-1 align-items-start">
                            <table class="fw-semibold">
                                <tr>
                                    <td colspan="2">
                                        <h6 class="fw-bold m-0">{{ $ticket->showtime->movie->title }}</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Genre</td>
                                    <td class="ps-2"> : {{ $ticket->showtime->movie->genre }}</td>
                                </tr>
                                <tr>
                                    <td>Theater</td>
                                    <td class="ps-2"> : {{ $ticket->showtime->studio->theater->name }}</td>
                                </tr>
                                <tr>
                                    <td>Studio</td>
                                    <td class="ps-2"> : {{ $ticket->showtime->studio->name }}</td>
                                </tr>
                                <tr>
                                    <td>Showtime</td>
                                    <td class="ps-2"> :
                                        {{ \Carbon\Carbon::parse($ticket->showtime->show_time)->format('H:i') }}</td>
                                </tr>
                                <tr>
                                    <td>Seats</td>
                                    <td class="ps-2"> :
                                        {{ implode(', ', $seats) }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td class="ps-2"> :
                                        {{ $ticket->status }}</td>
                                </tr>
                            </table>
                            <div class="ms-auto text-center">
                                <img src="{{ asset($ticket->showtime->movie->photo) }}" class="img-fluid" width="120"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('payment.complete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="text" name="amount" class="form-control"
                                    value="{{ $ticket->total_price }}" readonly>
                            </div>
                            <button type="submit" class="btn btn-{{ $ticket->status == 'paid' ? 'success' : 'primary' }} w-100 mt-3" {{ $ticket->status == 'paid' ? 'disabled' : '' }}>{{ $ticket->status = 'paid' ? 'Payment Completed' : 'Complete Payment' }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
