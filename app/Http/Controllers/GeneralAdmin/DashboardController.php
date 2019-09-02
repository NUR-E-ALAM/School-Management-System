<?php

namespace App\Http\Controllers\GeneralAdmin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('gadmin.home');
    }
}
