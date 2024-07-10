<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $shows = Show::all();
        return view('home', compact('shows'));
    }

    public function showShow($slug)
    {
        $show = Show::where('slug', $slug)->firstOrFail();
        return view('compras.user_inf', ['show' => $show]);
    }
}
