<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        
        $mahasiswas = Mahasiswa::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', '%' . $search . '%');
            })
            ->latest()
            ->paginate(10);
            
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|string|max:20|unique:mahasiswa,nim',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswa,email|max:255',
            'jurusan' => 'required|string|max:100',
            'angkatan' => 'required|numeric|min:1900|max:' . (date('Y') + 5),
        ]);

        $validated['user_id'] = auth()->id();

        Mahasiswa::create($validated);

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'nim' => 'required|string|max:20|unique:mahasiswa,nim,' . $mahasiswa->id,
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswa,email,' . $mahasiswa->id . '|max:255',
            'jurusan' => 'required|string|max:100',
            'angkatan' => 'required|numeric|min:1900|max:' . (date('Y') + 5),
        ]);

        $mahasiswa->update($validated);

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa berhasil diupdate!');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa berhasil dihapus!');
    }
}

