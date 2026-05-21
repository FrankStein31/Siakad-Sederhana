@extends('layouts.app')

@section('title', 'Fakultas')

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h2>Daftar Fakultas</h2>
            <a href="{{ route('fakultas.create') }}" class="btn">+ Tambah Fakultas</a>
        </div>

        <!-- Search Form -->
        <form method="GET" action="{{ route('fakultas.index') }}" style="margin-bottom: 1.5rem;">
            <div style="display: flex; gap: 0.5rem;">
                <input type="text" name="search" placeholder="Cari Nama Fakultas..." value="{{ request('search') }}" style="flex: 1; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                <button type="submit" class="btn">Cari</button>
                @if(request('search'))
                    <a href="{{ route('fakultas.index') }}" class="btn" style="background-color: #6c757d;">Reset</a>
                @endif
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Fakultas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            <a href="{{ route('fakultas.edit', $item->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('fakultas.destroy', $item->id) }}" method="POST" style="display: inline;">
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
