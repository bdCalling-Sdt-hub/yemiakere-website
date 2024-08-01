<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(Request $request)
    {
//        dd($request);
        $this->validate($request, [
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);
//        return redirect('/login');

        return redirect()->route('home')->withErrors(['message' => 'Failed to signup']);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:4',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('home');
        }

        return back()->withErrors(['message' => 'Username or password invalid']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
