@extends('layouts.app')

@section('title', 'Dosen')

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h2>Daftar Dosen</h2>
            <a href="{{ route('dosen.create') }}" class="btn">+ Tambah Dosen</a>
        </div>

        <!-- Search Form -->
        <form method="GET" action="{{ route('dosen.index') }}" style="margin-bottom: 1.5rem;">
            <div style="display: flex; gap: 0.5rem;">
                <input type="text" name="search" placeholder="Cari NIP atau Nama..." value="{{ request('search') }}" style="flex: 1; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                <button type="submit" class="btn">Cari</button>
                @if(request('search'))
                    <a href="{{ route('dosen.index') }}" class="btn" style="background-color: #6c757d;">Reset</a>
                @endif
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Jumlah Mahasiswa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->fakultas->nama }}</td>
                        <td><strong>{{ $item->mahasiswas->count() }}</strong></td>
                        <td>
                            <a href="{{ route('dosen.show', $item->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('dosen.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('dosen.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div style="margin-top: 1.5rem; display: flex; justify-content: flex-end;">
            {{ $data->links() }}
        </div>
    </div>
@endsection
