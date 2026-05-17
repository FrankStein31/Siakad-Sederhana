<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::with('fakultas')->get();
        return view('dosen.index', compact('data'));
    }

    public function create()
    {
        $fakultas = Fakultas::all();
        return view('dosen.create', compact('fakultas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:dosens',
            'nama' => 'required',
            'fakultas_id' => 'required|exists:fakultas,id'
        ]);
        Dosen::create($request->only('nip', 'nama', 'fakultas_id'));
        return redirect()->route('dosen.index');
    }

    public function edit(Dosen $dosen)
    {
        $fakultas = Fakultas::all();
        return view('dosen.edit', compact('dosen', 'fakultas'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nip' => 'required|unique:dosens,nip,' . $dosen->id,
            'nama' => 'required',
            'fakultas_id' => 'required|exists:fakultas,id'
        ]);
        $dosen->update($request->only('nip', 'nama', 'fakultas_id'));
        return redirect()->route('dosen.index');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return back();
    }
}
