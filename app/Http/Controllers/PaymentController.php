<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\Ticket;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function showPaymentPage(Ticket $ticket)
    {
        $seatIds = json_decode($ticket->seats);
        $seats = Seat::whereIn('id', $seatIds)->pluck('number')->toArray();
        if ($ticket->user_id !== Auth::id()) {
            return redirect()->route('payment.history')->with('error', 'Unauthorized access to ticket details.');
        }
        return view('payment.index', compact('ticket', 'seats'));
    }

    public function completePayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ticket_id' => 'required|exists:tickets,id',
            'amount' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        
        try {
            $ticket = Ticket::findOrFail($request->input('ticket_id'));

            $transactionId = "#CNFLX" . $ticket->created_at->format('dymis');
            // Create payment record
            $payment = Payment::create([
                'ticket_id' => $ticket->id,
                'amount' => $request->input('amount'),
                'status' => 'completed',
                'transaction_id' => $transactionId
            ]);

            $ticket->status = 'paid';
            $ticket->save();
            // Update seat availability
            $seatIds = json_decode($ticket->seats, true);
            Seat::whereIn('id', $seatIds)->update(['is_available' => false]);

            DB::commit();

            return redirect()->route('payment', ['ticket' => $ticket->id])
                             ->with('success', 'Payment completed successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Payment failed: ' . $e->getMessage());
        }
    }
    public function paymentHistory()
    {
        $payments = Payment::with('ticket.showtime.movie', 'ticket.showtime.studio.theater')
                            ->whereHas('ticket', function ($query) {
                                $query->where('user_id', Auth::id());
                            })
                            ->get();

        return view('payment.history', compact('payments'));
    }
}
