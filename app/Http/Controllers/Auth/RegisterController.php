<?php

namespace App\Http\Controllers\Auth;

use App\Factories\ClientUserFactory;
use App\Factories\OrganizerUserFactory;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm($role)
    {
        return view("auth.register_{$role}");
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function register(UserRequest $request)
    {
        $user = $this->getUserFactory($request->role)->createUser($request->all());

        Auth::login($user);

        return redirect('/');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return $this->handleUserRedirect(Auth::user());
        }

        return back()->withErrors([
            'error' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
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

    public function updatePassword(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect('/');
        }

        return back()->withErrors([
            'error' => 'El correo electrónico proporcionado no coincide con nuestros registros.',
        ]);
    }

    public function handleUserRedirect($user)
    {
        if($user->role_id === UserRole::CLIENT || $user->role_id === UserRole::ORGANIZER) {
            return redirect('/');
        }

        return back()->with(['error' => 'No tienes permisos para acceder a esta página.']);
    }

    protected function getUserFactory($role)
    {
        switch ($role) {
            case UserRole::CLIENT:
                return new ClientUserFactory();
            case UserRole::ORGANIZER:
                return new OrganizerUserFactory();
        }
    }
}
