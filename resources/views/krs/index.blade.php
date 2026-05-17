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
                    <th>Mata Kuliah</th>
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
                                $mks = $item->mataKuliahs()->get();
                            @endphp
                            @if($mks->count() > 0)
                                <ul style="margin: 0; padding-left: 1.2rem; font-size: 0.9rem;">
                                    @foreach($mks as $mk)
                                        <li>{{ $mk->kode }} - {{ $mk->nama }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span style="color: #999;">-</span>
                            @endif
                        </td>
                        <td>
                            @php
                                $total = $item->mataKuliahs()->sum('sks');
                            @endphp
                            <strong>{{ $total }}</strong>
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
