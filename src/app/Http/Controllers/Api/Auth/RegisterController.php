<?php

namespace App\Http\Controllers\Api\Auth;

use App\Entity\User;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{


    public function register(RegisterRequest $request)
    {

        User::create([
            "name" => $request["name"],
            "email" => $request["email"],
            "password" =>  bcrypt($request["password"])
        ]);
        return redirect("/admin");
    }
}
