<?php

namespace App\Http\Controllers\Fakultas;

use App\Http\Controllers\Controller;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $data = Fakultas::when($search, function ($query) use ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        })
        ->paginate(10);
        return view('fakultas.index', compact('data', 'search'));
    }

    public function create()
    {
        return view('fakultas.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama' => 'required']);
        Fakultas::create($request->only('nama'));
        return redirect()->route('fakultas.index');
    }

    public function edit(Fakultas $fakulta)
    {
        return view('fakultas.edit', compact('fakulta'));
    }

    public function update(Request $request, Fakultas $fakulta)
    {
        $request->validate(['nama' => 'required']);
        $fakulta->update($request->only('nama'));
        return redirect()->route('fakultas.index');
    }

    public function destroy(Fakultas $fakulta)
    {
        $fakulta->delete();
        return back();
    }
}
