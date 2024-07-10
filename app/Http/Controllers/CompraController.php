<?php

namespace App\Http\Controllers;

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
                'tickets.*' => 'nullable|numeric',
            ]);

            $tickets = $request->tickets;

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
            ]);

            $seats = explode(',', $request->seatNumber);
            Log::info($seats);

            return view('compras.payment', compact('show', 'seats'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Error al seleccionar los asientos');
        }
    }

    public function reservar(Show $show, Request $request)
    {
    }
}
