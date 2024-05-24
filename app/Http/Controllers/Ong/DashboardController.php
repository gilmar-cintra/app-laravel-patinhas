<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $ong = Auth::guard('ong')->user();
        return view('ong.dashboard', compact('ong'));
    }
}
