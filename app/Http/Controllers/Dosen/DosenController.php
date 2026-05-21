<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $data = Dosen::with('fakultas', 'mahasiswas')
            ->when($search, function ($query) use ($search) {
                $query->where('nip', 'like', '%' . $search . '%')
                      ->orWhere('nama', 'like', '%' . $search . '%');
            })
            ->paginate(10);
        return view('dosen.index', compact('data', 'search'));
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

    public function show(Dosen $dosen)
    {
        $dosen->load('fakultas', 'mahasiswas');
        return view('dosen.show', compact('dosen'));
    }

    public function getByFakultas($fakultasId)
    {
        $dosens = Dosen::where('fakultas_id', $fakultasId)->get(['id', 'nama']);
        return response()->json($dosens);
    }
}
