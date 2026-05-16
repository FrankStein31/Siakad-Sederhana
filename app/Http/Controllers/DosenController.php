<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        
        $dosens = Dosen::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', '%' . $search . '%');
            })
            ->latest()
            ->paginate(10);
            
        return view('dosens.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosens.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nisn' => 'required|string|max:20|unique:dosen,nisn',
            'email' => 'required|email|unique:dosen,email|max:255',
        ]);

        $validated['user_id'] = auth()->id();

        Dosen::create($validated);

        return redirect()->route('dosens.index')
            ->with('success', 'Dosen berhasil ditambahkan!');
    }

    public function show(Dosen $dosen)
    {
        return view('dosens.show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        return view('dosens.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nisn' => 'required|string|max:20|unique:dosen,nisn,' . $dosen->id,
            'email' => 'required|email|unique:dosen,email,' . $dosen->id . '|max:255',
        ]);

        $dosen->update($validated);

        return redirect()->route('dosens.index')
            ->with('success', 'Dosen berhasil diupdate!');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosens.index')
            ->with('success', 'Dosen berhasil dihapus!');
    }
}

