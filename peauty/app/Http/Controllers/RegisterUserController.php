<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function create(Request $request){
        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'gender' => $request['gender'],
            'password' => Hash::make($request['password']),
        ]);
        return view('home');
    }
}
