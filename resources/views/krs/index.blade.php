@extends('layouts.app')

@section('title', 'KRS')

@section('content')
    <div class="card">
        <h2>Kelola KRS</h2>

        <!-- Search Form -->
        <form method="GET" action="{{ route('krs.index') }}" style="margin-bottom: 1.5rem;">
            <div style="display: flex; gap: 0.5rem;">
                <input type="text" name="search" placeholder="Cari NIM atau Nama..." value="{{ request('search') }}" style="flex: 1; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                <button type="submit" class="btn">Cari</button>
                @if(request('search'))
                    <a href="{{ route('krs.index') }}" class="btn" style="background-color: #6c757d;">Reset</a>
                @endif
            </div>
        </form>

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
                        <td>{{ ($mahasiswas->currentPage() - 1) * $mahasiswas->perPage() + $loop->iteration }}</td>
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

        <!-- Pagination -->
        <div style="margin-top: 1.5rem; display: flex; justify-content: flex-end;">
            {{ $mahasiswas->links() }}
        </div>
    </div>
@endsection
