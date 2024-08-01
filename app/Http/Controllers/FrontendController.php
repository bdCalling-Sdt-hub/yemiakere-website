<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function books()
    {
        return view('books.books');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function logout()
    {
        return view('auth.logout');
    }

    public function signUp()
    {
        return view('auth.sign-up');
    }

    public function training()
    {
        return view('training.training');
    }
}
