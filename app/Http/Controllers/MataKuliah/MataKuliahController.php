<?php

namespace App\Http\Controllers\MataKuliah;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = MataKuliah::all();
        return view('mata_kuliah.index', compact('data'));
    }

    public function create()
    {
        return view('mata_kuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:mata_kuliahs',
            'nama' => 'required',
            'sks' => 'required|integer|min:1'
        ]);
        MataKuliah::create($request->only('kode', 'nama', 'sks'));
        return redirect()->route('mata_kuliah.index');
    }

    public function edit(MataKuliah $mataKuliah)
    {
        return view('mata_kuliah.edit', compact('mataKuliah'));
    }

    public function update(Request $request, MataKuliah $mataKuliah)
    {
        $request->validate([
            'kode' => 'required|unique:mata_kuliahs,kode,' . $mataKuliah->id,
            'nama' => 'required',
            'sks' => 'required|integer|min:1'
        ]);
        $mataKuliah->update($request->only('kode', 'nama', 'sks'));
        return redirect()->route('mata_kuliah.index');
    }

    public function destroy(MataKuliah $mataKuliah)
    {
        $mataKuliah->delete();
        return back();
    }
}
