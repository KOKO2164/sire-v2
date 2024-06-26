<?php

namespace App\Http\Controllers;

use App\Models\Show;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function update(Show $show, Request $request)
    {   
        $request->validate([
            'phone' => 'required|numeric',
            'dni' => 'required|numeric',
        ]);

        $user = User::find(auth()->id());

        $user->update($request->all());

        return redirect()->route('ticketSelection', $show);
    }
}
