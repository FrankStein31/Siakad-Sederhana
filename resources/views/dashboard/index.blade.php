@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="stats">
        <div class="stat-card">
            <p>Fakultas</p>
            <h3>{{ $stats['fakultas'] }}</h3>
        </div>
        <div class="stat-card">
            <p>Dosen</p>
            <h3>{{ $stats['dosen'] }}</h3>
        </div>
        <div class="stat-card">
            <p>Mahasiswa</p>
            <h3>{{ $stats['mahasiswa'] }}</h3>
        </div>
        <div class="stat-card">
            <p>Mata Kuliah</p>
            <h3>{{ $stats['mataKuliah'] }}</h3>
        </div>
    </div>
@endsection
