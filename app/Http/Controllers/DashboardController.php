<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $historiSiswa = Pembayaran::where('nisn', auth()->user()->nisn);
        return view('dashboard', compact('historiSiswa'));
    }
}
