<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'fakultas' => Fakultas::count(),
            'dosen' => Dosen::count(),
            'mahasiswa' => Mahasiswa::where('status', 'Aktif')->count(),
            'mataKuliah' => MataKuliah::count(),
        ];
        return view('dashboard.index', compact('stats'));
    }
}
