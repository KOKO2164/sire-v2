<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompraController extends Controller
{
    public function ticketSelection(Show $show)
    {
        return view('compras.ticket_selection', compact('show'));
    }

    public function seatSelection(Show $show, Request $request)
    {   
        Log::info($request->all());
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

    public function seatSelected(Show $show, Request $request)
    {
        
    }
}
