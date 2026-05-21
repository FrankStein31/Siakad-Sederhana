@extends('layouts.app')

@section('title', 'Mata Kuliah')

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h2>Daftar Mata Kuliah</h2>
            <a href="{{ route('mata_kuliah.create') }}" class="btn">+ Tambah Mata Kuliah</a>
        </div>

        <!-- Search Form -->
        <form method="GET" action="{{ route('mata_kuliah.index') }}" style="margin-bottom: 1.5rem;">
            <div style="display: flex; gap: 0.5rem;">
                <input type="text" name="search" placeholder="Cari Kode atau Nama..." value="{{ request('search') }}" style="flex: 1; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                <button type="submit" class="btn">Cari</button>
                @if(request('search'))
                    <a href="{{ route('mata_kuliah.index') }}" class="btn" style="background-color: #6c757d;">Reset</a>
                @endif
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->sks }}</td>
                        <td>
                            <a href="{{ route('mata_kuliah.edit', $item->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('mata_kuliah.destroy', $item->id) }}" method="POST" style="display: inline;">
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
