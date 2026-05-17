<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Fakultas;
use App\Models\Dosen;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::with('fakultas', 'dosen')->get();
        return view('mahasiswa.index', compact('data'));
    }

    public function show(Mahasiswa $mahasiswa)
    {
        $mahasiswa->load('fakultas', 'dosen', 'mataKuliahs');
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function create()
    {
        $fakultas = Fakultas::all();
        $dosen = Dosen::all();
        return view('mahasiswa.create', compact('fakultas', 'dosen'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas',
            'nama' => 'required',
            'email' => 'required|email|unique:mahasiswas',
            'fakultas_id' => 'required|exists:fakultas,id',
            'dosen_id' => 'nullable|exists:dosens,id'
        ]);
        Mahasiswa::create($request->only('nim', 'nama', 'email', 'fakultas_id', 'dosen_id'));
        return redirect()->route('mahasiswa.index');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $fakultas = Fakultas::all();
        $dosen = Dosen::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'fakultas', 'dosen'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required',
            'email' => 'required|email|unique:mahasiswas,email,' . $mahasiswa->id,
            'fakultas_id' => 'required|exists:fakultas,id',
            'dosen_id' => 'nullable|exists:dosens,id',
            'status' => 'required|in:Aktif,Tidak Aktif'
        ]);
        $mahasiswa->update($request->only('nim', 'nama', 'email', 'fakultas_id', 'dosen_id', 'status'));
        return redirect()->route('mahasiswa.index');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return back();
    }
}
