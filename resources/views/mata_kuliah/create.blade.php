@extends('layouts.app')

@section('title', 'Tambah Mata Kuliah')

@section('content')
    <div class="card">
        <h2>Tambah Mata Kuliah Baru</h2>

        <form action="{{ route('mata_kuliah.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Kode Mata Kuliah</label>
                <input type="text" name="kode" required value="{{ old('kode') }}">
            </div>
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="text" name="nama" required value="{{ old('nama') }}">
            </div>
            <div class="form-group">
                <label>SKS</label>
                <input type="number" name="sks" required min="1" value="{{ old('sks') }}">
            </div>
            <div class="form-actions">
                <button type="submit" class="btn">Simpan</button>
                <a href="{{ route('mata_kuliah.index') }}" class="btn" style="background: #7f8c8d;">Batal</a>
            </div>
        </form>
    </div>
@endsection
