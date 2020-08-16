<?php

namespace App\Http\Controllers\Api\Auth;

use App\Entity\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterFormRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function __invoke(RegisterFormRequest $request)
    {
        $user = User::create(array_merge(
            $request->only('name', 'email'),
            ['password' => bcrypt($request->password)]
        ));
        return response()->json([
            "message" => 'OK'
        ],200);
    }
}
