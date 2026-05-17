<?php

namespace App\Http\Controllers\Krs;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Krs;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('krs.index', compact('mahasiswas'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $mataKuliahs = MataKuliah::all();
        $selected = $mahasiswa->mataKuliahs()->pluck('mata_kuliah_id')->toArray();
        return view('krs.edit', compact('mahasiswa', 'mataKuliahs', 'selected'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $selected = $request->input('mata_kuliah_id', []);
        $mahasiswa->mataKuliahs()->sync($selected);
        return redirect()->route('krs.index');
    }
}
