<?php

namespace App\Factories;

use App\Interfaces\IUserFactory;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;

class OrganizerUserFactory implements IUserFactory
{
    public function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'role_id' => UserRole::ORGANIZER
        ]);
    }
}