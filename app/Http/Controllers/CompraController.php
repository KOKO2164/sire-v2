<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Seat;
use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompraController extends Controller
{
    public function ticketSelection($slug)
    {
        $show = Show::where('slug', $slug)->firstOrFail();
        return view('compras.ticket_selection', compact('show'));
    }

    public function seatSelection($slug, Request $request)
    {
        $show = Show::where('slug', $slug)->firstOrFail();
        try {
            $request->validate([
                'tickets' => 'required|array',
                'tickets.*' => 'numeric|min:0|max:10',
            ]);

            $tickets = $request->tickets;
            Log::info($tickets);

            return view('compras.seat_selection', compact('show', 'tickets'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Error al seleccionar los tickets');
        }
    }

    public function pagar($slug, Request $request)
    {
        $show = Show::where('slug', $slug)->firstOrFail();
        try {
            $request->validate([
                'seatNumber' => 'required|string',
                'tickets' => 'required|numeric',
            ]);

            $seatNumber = $request->seatNumber;
            $seats = explode(',', $seatNumber);
            Log::info($seats);
            $ticket0 = $request->ticket0 ?? 0;
            $ticket1 = $request->ticket1 ?? 0;
            $ticket2 = $request->ticket2 ?? 0;

            $cantidad = 0;
            $price = 0;
            if ($ticket0 > 0) {
                $cantidad = $ticket0;
                $price = $show->seatAreaPrices['0']->price;
            }
            if ($ticket1 > 0) {
                $cantidad = $ticket1;
                $price = $show->seatAreaPrices['1']->price;
            }
            if ($ticket2 > 0) {
                $cantidad = $ticket2;
                $price = $show->seatAreaPrices['2']->price;
            }

            $reservation = [];
            foreach ($seats as $index => $seat) {
                Log::info($seat);
                preg_match('/([A-Z])(\d+)/', $seat, $matches);
                Log::info($matches);
                $row = $matches[1];
                $number = $matches[2];

                $seat = Seat::where('row', $row)->where('column', $number)->firstOrFail();

                $reservation[$index] = Reservation::create([
                    'date' => now(),
                    'time' => now(),
                    'price' => $price,
                    'status_id' => 1,
                    'show_id' => $show->id,
                    'user_id' => auth()->user()->id,
                    'seat_id' => $seat->id,
                ]);
            }

            $reservationJson = json_encode($reservation);

            return view('compras.payment', compact('show', 'seats', 'price', 'cantidad', 'reservationJson'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Log::error('Error al seleccionar los asientos');
            return back()->with('error', 'Error al seleccionar los asientos');
        }
    }

    public function reservar(Show $show, Request $request)
    {
    }
}
