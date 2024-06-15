<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Penginapan;
use App\Models\Budaya;
use App\Models\Pariwisata;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view ('dashboard.index', [
            // 'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
