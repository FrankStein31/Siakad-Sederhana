<?php

namespace App\Http\Controllers\MataKuliah;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $data = MataKuliah::when($search, function ($query) use ($search) {
            $query->where('kode', 'like', '%' . $search . '%')
                  ->orWhere('nama', 'like', '%' . $search . '%');
        })
        ->paginate(10);
        return view('mata_kuliah.index', compact('data', 'search'));
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
