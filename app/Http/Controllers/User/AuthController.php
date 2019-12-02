<?php

namespace App\Http\Controllers\User;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = auth()->attempt($request->only('email','password'));
        return redirect()->back();
    }

    public function register(Request $reuest)
    {
        $user = new User;
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        return redirect()->back();
    }
}
