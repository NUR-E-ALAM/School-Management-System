<?php

namespace App\Http\Controllers\Accountant;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('accountant.home');
    }
}
