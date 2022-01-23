<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function create($userData)
    {
        return User::create($userData);
    }

    public function getAll()
    {
        return User::all();
    }
}