<?php

namespace App\Http\Controllers\Libarian;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('libarian.home');
    }
}
