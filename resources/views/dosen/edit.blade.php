@extends('layouts.app')

@section('title', 'Edit Dosen')

@section('content')
    <div class="card">
        <h2>Edit Dosen</h2>

        <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" required value="{{ $dosen->nip }}">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required value="{{ $dosen->nama }}">
            </div>
            <div class="form-group">
                <label>Fakultas</label>
                <select name="fakultas_id" required>
                    <option value="">-- Pilih Fakultas --</option>
                    @foreach ($fakultas as $fak)
                        <option value="{{ $fak->id }}" {{ $dosen->fakultas_id == $fak->id ? 'selected' : '' }}>{{ $fak->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn">Simpan</button>
                <a href="{{ route('dosen.index') }}" class="btn" style="background: #7f8c8d;">Batal</a>
            </div>
        </form>
    </div>
@endsection
