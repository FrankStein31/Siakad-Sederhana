@extends('layouts.app')

@section('title', 'Mahasiswa')

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h2>Daftar Mahasiswa</h2>
            <a href="{{ route('mahasiswa.create') }}" class="btn">+ Tambah Mahasiswa</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Fakultas</th>
                    <th>PA</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->fakultas->nama }}</td>
                        <td>{{ $item->dosen ? $item->dosen->nama : '-' }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
