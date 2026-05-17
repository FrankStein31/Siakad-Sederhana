@extends('layouts.app')

@section('title', 'Edit Fakultas')

@section('content')
    <div class="card">
        <h2>Edit Fakultas</h2>

        <form action="{{ route('fakultas.update', $fakulta->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama Fakultas</label>
                <input type="text" name="nama" required value="{{ $fakulta->nama }}">
            </div>
            <div class="form-actions">
                <button type="submit" class="btn">Simpan</button>
                <a href="{{ route('fakultas.index') }}" class="btn" style="background: #7f8c8d;">Batal</a>
            </div>
        </form>
    </div>
@endsection
