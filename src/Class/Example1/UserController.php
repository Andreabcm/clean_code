<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Http\Requests\StoreUserRequest;

/**
 * Buenas prácticas aplicadas:
 * Esta clase ya no sabe nada sobre la lógica de validar requests ni modelos,
 * El StoreUserRequest se encarga de validar y el UserRepository se encarga de crear nuevos usuarios.
 * Esta técina se lla SRP: Single Responsibility Principle
 */
class UserController extends Controller
{
    public function store(StoreUserRequest $request, UserRepository $userRepository)
    {
        $user = $userRepository->create($request);
        return response()->json(['user' => $user]);
    }
}