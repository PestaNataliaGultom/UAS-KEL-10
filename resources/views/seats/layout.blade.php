@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 text-center my-auto border">
                <h6 class="fw-bold border-bottom py-2">SEATS GUIDE</h6>
                <div class="d-flex flex-wrap justify-content-center gap-4">
                    <div >
                        <button type="button" class="btn btn-secondary p-2" disabled><i class="fas fa-couch"></i></button>
                        <p class="fw-semibold m-0 py-1" style="font-size: 10px">Booked Seats</p>
                    </div>
                    <div >
                        <button type="button" class="btn btn-outline-primary p-2" disabled><i class="fas fa-couch"></i></button>
                        <p class="fw-semibold m-0 py-1" style="font-size: 10px">Available Seats</p>
                    </div>
                    <div >
                        <button type="button" class="btn btn-primary p-2" disabled><i class="fas fa-couch"></i></button>
                        <p class="fw-semibold m-0 py-1" style="font-size: 10px">Selected Seats</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @php
                    $totalSeats = $seats->count();
                    $cols = 8;
                    $rows = ceil($totalSeats / $cols);
                    $seatIndex = 0;
                @endphp
                <div class="text-center py-4">
                    <p class="m-0 fw-bold fs-4">SCREEN</p>
                    <img src="{{ asset('assets/images/screen-studio.svg') }}" alt="">
                </div>
                @for ($i = 0; $i < $rows; $i++)
                    <div class="d-flex justify-content-center gap-2 mb-2">
                        @for ($j = 0; $j < $cols; $j++)
                            @if ($seatIndex < $totalSeats)
                                @php
                                    $seat = $seats[$seatIndex];
                                @endphp
                                <button href="#"
                                    class="btn seat-button {{ $seat->is_available ? 'btn-outline-primary' : 'btn-secondary' }} rounded text-center col-md-1 py-2"
                                    data-seat-id="{{ $seat->id }}" {{ $seat->is_available ? '' : 'disabled' }}
                                    data-seat-id="{{ $seat->id }}"
                                    onclick="toggleSeatSelection(this, {{ $seat->id }}, {{ $seat->number }})">
                                    <i class="fas fa-couch"></i> <br> {{ $seat->number }}
                                </button>
                                @php
                                    $seatIndex++;
                                @endphp
                            @else
                                <div class="col"></div>
                            @endif
                        @endfor
                    </div>
                @endfor
            </div>
            
            <div class="col-md-3 border">
                @if ($errors->any())
                    <div class="alert alert-primary">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="d-flex border-bottom justify-content-between align-items-center p-2">
                    <span class="fw-semibold"> Booking summary</span>
                    <i class="fas fa-ticket-alt"></i>
                </div>
                <div class="d-flex border-bottom p-2 align-items-center">
                    <img src="{{ asset($showtime->movie->photo) }}" height="140" class="img-responsive" alt="">
                    <div class="ms-2">
                        <p class="fw-bold m-0">{{ $showtime->movie->title }}</p>
                        <p class="m-0">{{ $showtime->movie->genre }}</p>
                        <p class="m-0"><i class="far fa-clock"></i> {{ $showtime->movie->duration }} Minutes</p>
                    </div>
                </div>
                <div class="border-bottom p-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="m-0 fw-semibold">{{ $showtime->studio->theater->name }}</p>
                        <i class="fas fa-film"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="m-0 fw-semibold">{{ $showtime->studio->name }}</p>
                        <i class="fas fa-door-open"></i>
                    </div>
                </div>
                <div class="border-bottom p-2">
                    <p class="m-0 fw-bold mb-2">SEATS SELECTED</p>
                    <div id="selectedSeatsContainer" class="d-flex flex-wrap gap-2 mb-2">
                        <!-- Container to display selected seats dynamically -->
                    </div>
                </div>
                <div class="col pt-2">
                    <div class="d-flex justify-content-between">
                        <p class="m-0 fw-semibold text-primary">Total Seats:</p>
                        <span id="totalSeatsDisplay" class="fs-6 fw-semibold">0</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="m-0 fw-semibold text-primary">Grand Total:</p>
                        <span id="totalPriceDisplay" class="fs-6 fw-semibold">0</span>
                    </div>
                    <div class="w-100">
                        <form id="ticketForm" action="{{ route('ticket.confirm') }}" method="POST">
                            @csrf
                            <input type="hidden" name="showtime_id" value="{{ $showtime->id }}">
                            <input type="hidden" name="ticket_price" value="{{ $showtime->studio->theater->price }}">
                            <input type="hidden" name="selectedSeats" id="selectedSeatsInput" value='{{ json_encode(old("selectedSeats", [])) }}'>
                            <button type="button" class="btn btn-primary mt-2 w-100" onclick="confirmSelection()">Confirm
                                Selection</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        let seats = @json($seats);
        const ticketPrice = parseFloat({{ $showtime->studio->theater->price }});
        let selectedSeats = [];

        function toggleSeatSelection(button, seatId, seatNumber) {
            let seatIndex = selectedSeats.findIndex(seat => seat.id === seatId);

            if (seatIndex !== -1) {
                // Hapus kursi jika sudah dipilih sebelumnya
                selectedSeats.splice(seatIndex, 1);
                button.classList.remove('btn-primary');
                button.classList.add('btn-outline-primary');
            } else {
                // Tambahkan kursi ke dalam daftar yang dipilih
                selectedSeats.push({
                    id: seatId,
                    number: seatNumber
                });
                button.classList.remove('btn-outline-primary');
                button.classList.add('btn-primary');
            }
            updateSelectedSeatsDisplay();
        }

        function updateSelectedSeatsDisplay() {
            const selectedSeatsContainer = document.getElementById('selectedSeatsContainer');
            selectedSeatsContainer.innerHTML = ''; // Kosongkan kontainer sebelum memperbarui

            selectedSeats.forEach(seat => {
                const seatButton = document.createElement('button');
                seatButton.classList.add('btn', 'btn-outline-primary', 'rounded', 'text-center', 'py-2');
                seatButton.innerHTML = `<i class="fas fa-couch"></i> <br> ${seat.number}`;
                selectedSeatsContainer.appendChild(seatButton);
            });

            // Tampilkan jumlah total tiket yang dipilih
            const totalSeats = selectedSeats.length;
            const totalSeatsDisplay = document.getElementById('totalSeatsDisplay');
            totalSeatsDisplay.innerText = `${totalSeats}`;

            // Tampilkan harga total tiket
            const totalPriceDisplay = document.getElementById('totalPriceDisplay');
            const totalPrice = totalSeats * ticketPrice;
            totalPriceDisplay.innerText = `Rp ${totalPrice}`;
        }

        function confirmSelection() {
            if (selectedSeats.length > 0) {
                document.getElementById('selectedSeatsInput').value = JSON.stringify(selectedSeats.map(seat => seat.id));
                document.getElementById('ticketForm').submit();
            } else {
                alert('Please select at least one seat.');
            }
        }
    </script>
@endsection
