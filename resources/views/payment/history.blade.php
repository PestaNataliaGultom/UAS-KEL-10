@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Payment History</h1>

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

    @if($payments->isEmpty())
        <p>No payment history available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Movie Title</th>
                    <th>Theater</th>
                    <th>Studio</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->transaction_id }}</td>
                        <td>{{ $payment->ticket->showtime->movie->title }}</td>
                        <td>{{ $payment->ticket->showtime->studio->theater->name }}</td>
                        <td>{{ $payment->ticket->showtime->studio->name }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>{{ ucfirst($payment->status) }}</td>
                        <td>{{ $payment->created_at->format('d M Y H:i') }}</td>
                        <td>
                            <a href="{{ route('payment', ['ticket' => $payment->ticket->id]) }}" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
