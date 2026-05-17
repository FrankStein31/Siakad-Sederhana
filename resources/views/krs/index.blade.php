@extends('layouts.app')

@section('title', 'KRS')

@section('content')
    <div class="card">
        <h2>Kelola KRS</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Total SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->fakultas->nama }}</td>
                        <td>
                            @php
                                $total = $item->mataKuliahs()->sum('sks');
                            @endphp
                            {{ $total }}
                        </td>
                        <td>
                            <a href="{{ route('krs.edit', $item->id) }}" class="btn btn-info">Kelola</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
