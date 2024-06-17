<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use App\Models\Pariwisata;
use App\Models\Penginapan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $budaya = Budaya::count();
        $pariwisata = Pariwisata::count();
        $penginapan = Penginapan::count();
        
        return view('home', compact('budaya','pariwisata','penginapan'));
    }
}
