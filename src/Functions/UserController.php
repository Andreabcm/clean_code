<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    private UserRepository $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository;
    }

    public function store(StoreUserRequest $request)
    {
        $user = $this->userRepository->create($request);

        return response()->json(['user' => $user]);
    }

    public function index()
    {
        $users = $this->userRepository->getAll();
        
        return response()->json(['user' => $users]);
    }
}