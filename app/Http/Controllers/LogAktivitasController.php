<?php

namespace App\Http\Controllers;

use App\Models\LogAktivitas;
use Illuminate\Http\Request;

class LogAktivitasController extends Controller
{
    public function index()
    {
        // Mengambil data log beserta nama user yang melakukannya
        $data = LogAktivitas::with('user')->orderBy('created_at', 'desc')->get();
        return view('log-aktivitas.index', compact('data'));
    }
}