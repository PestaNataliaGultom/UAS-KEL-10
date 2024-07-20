<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    public function confirmTicket(Request $request)
    {
        $request->merge([
            'selectedSeats' => json_decode($request->input('selectedSeats'), true)
        ]);
        
        $validator = Validator::make($request->all(), [
            'showtime_id' => 'required|exists:showtimes,id',
            'selectedSeats' => 'required|array',
            'selectedSeats.*' => 'exists:seats,id'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $ticket = Ticket::create([
            'showtime_id' => $validated['showtime_id'],
            'user_id' => auth()->id(), // Assuming user is logged in
            'seats' => json_encode($validated['selectedSeats']),
            'total_price' => count($validated['selectedSeats']) * $request->input('ticket_price')
        ]);

        return redirect()->route('payment', ['ticket' => $ticket->id]);

    }
}
