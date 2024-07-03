<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userDashboard()
    {
        return view('pages.user.dashboard');
    }

    public function adminDashboard()
    {
        return view('pages.admin.dashboard');
    }
}
