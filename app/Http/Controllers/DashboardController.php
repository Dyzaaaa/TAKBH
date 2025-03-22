<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function apotekerDashboard()
    {
        return view('apoteker.dashboard');
    }

    public function dokterDashboard()
    {
        return view('dokter.dashboard');
    }
}
