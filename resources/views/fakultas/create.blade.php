@extends('layouts.app')

@section('title', 'Tambah Fakultas')

@section('content')
    <div class="card">
        <h2>Tambah Fakultas Baru</h2>

        <form action="{{ route('fakultas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Fakultas</label>
                <input type="text" name="nama" required value="{{ old('nama') }}">
            </div>
            <div class="form-actions">
                <button type="submit" class="btn">Simpan</button>
                <a href="{{ route('fakultas.index') }}" class="btn" style="background: #7f8c8d;">Batal</a>
            </div>
        </form>
    </div>
@endsection
