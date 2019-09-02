<?php

namespace App\Http\Controllers\parent;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('parent.home');
    }
}
