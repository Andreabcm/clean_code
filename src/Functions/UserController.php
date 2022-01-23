<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function store(StoreUserRequest $request, UserRepository $userRepository)
    {
        $user = $userRepository->create($request);

        return response()->json(['user' => $user]);
    }
}