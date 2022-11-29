<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        return view('user.index');
    }

    public function profil() {
        $user = Auth()->user();
        return view('profil', compact('user'));
    }

    public function post_edit(Request $request){
        $request->validate([
            'name' => [ 'string', 'max:255', 'min:1'],
            // 'username' => [ 'string', 'max:255', 'unique:users'],
            // 'email' => [ 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => [ 'string', 'min:11', 'max:13'],
            'gender' => [ 'string'],
        ]);
        $user = Auth()->user();
        $user = User::find($user->id);
        
        $user->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
        ]);
        $user->save();
        return redirect()->back();
    }
}
