<?php

namespace App\Http\Controllers;

use App\Mail\usersignedup;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    public function signup()
    {
        return view('user.signup');
    }

    public function create()
    {
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'profilepic' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);
        $user = User::create([
            'first_name' => $attributes['first_name'],
            'last_name' => $attributes['last_name'],
            'profilepic' => $attributes['profilepic'],
            'email' => $attributes['email'],
            'password' => $attributes['password']
        ]);
        Auth::login($user);
        Mail::to($user->email)->send(new usersignedup());
        return redirect('/');

    }

    public function signin()
    {
        return view('user.signin');

    }

    public function login()
    {
        $user = request()->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        Auth::attempt($user);
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');


    }

}
