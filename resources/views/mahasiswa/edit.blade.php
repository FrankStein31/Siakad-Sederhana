@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
    <div class="card">
        <h2>Edit Mahasiswa</h2>

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" required value="{{ $mahasiswa->nim }}">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required value="{{ $mahasiswa->nama }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required value="{{ $mahasiswa->email }}">
            </div>
            <div class="form-group">
                <label>Fakultas</label>
                <select name="fakultas_id" required>
                    <option value="">-- Pilih Fakultas --</option>
                    @foreach ($fakultas as $fak)
                        <option value="{{ $fak->id }}" {{ $mahasiswa->fakultas_id == $fak->id ? 'selected' : '' }}>{{ $fak->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Pembimbing Akademik</label>
                <select name="dosen_id">
                    <option value="">-- Pilih Dosen --</option>
                    @foreach ($dosen as $d)
                        <option value="{{ $d->id }}" {{ $mahasiswa->dosen_id == $d->id ? 'selected' : '' }}>{{ $d->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn">Simpan</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn" style="background: #7f8c8d;">Batal</a>
            </div>
        </form>
    </div>
@endsection
