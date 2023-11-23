<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RequestLogin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RequestRegister;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register(RequestRegister $req) {
        $data = $req->validated();
        $user = User::create($data);

        return response()->json($user, 200);
    }

    public function login(RequestLogin $req) {
        $data = $req->validated();

        $token = Auth::attempt($req->only('email', 'password'));
        if (!$token) {
            throw new HttpResponseException(response([
                "errors" => [
                    "message" => [
                        "email or password wrong"
                    ]
                ]
            ], 401));
        }

        $user = Auth::user();

        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
            'token' => $token,
        ], 200);
    }
}
