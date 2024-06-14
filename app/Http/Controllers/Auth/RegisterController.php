<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerUserClient()
    {
        return view('auth.register_client');
    }

    public function storeUserClient(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'string|max:20|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role_id' => UserRole::CLIENT
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function loginUserClient()
    {
        return view('auth.login_client');
    }

    public function enterUserClient(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->role_id === UserRole::CLIENT) {
                return redirect('/');
            }
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function resetPassword()
    {
        return view('auth.reset_pass_client');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
        ]);
        
        return view('auth.new_pass_client', ['email' => $request->email]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'El correo electrónico proporcionado no coincide con nuestros registros.',
        ]);
    }

    public function registerUserOrganizer()
    {
        return view('auth.register_organizer');
    }

    public function storeUserOrganizer(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'string|max:20|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role_id' => UserRole::ORGANIZER
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function loginUserOrganizer()
    {
        return view('auth.login_organizer');
    }

    public function enterUserOrganizer(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->role_id === UserRole::ORGANIZER) {
                return redirect('/');
            }
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }
}
