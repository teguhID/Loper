<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Login()
    {
        return view('auth.loginAdmin');
    }
    public function Dashboard()
    {
        return view('admin.dashboard');
    }
}
