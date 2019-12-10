<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Validator;
class UserController extends Controller
{
    public function login()
    {
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/home')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // create our user data for the authentication
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                echo 'SUCCESS!';

            } else {

                // validation not successful, send back to form
                return Redirect::to('themes.home.login');

            }
        }
    }

    public function logout(){

    }
    public function index()
    {

    }

}
