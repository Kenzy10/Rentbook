<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PerpustakaanController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function read()
    {
        return view('read');
    }
}
