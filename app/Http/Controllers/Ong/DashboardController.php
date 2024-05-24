<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Pet;

class DashboardController extends Controller
{
    public function index()
    {
        $ong = Auth::guard('ong')->user();        
        $pets = Pet::where('ong_id', $ong->id)->get();
       
        return view('ong.dashboard', compact('ong', 'pets'));
    }
}
