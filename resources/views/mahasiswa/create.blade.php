@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <div class="card">
        <h2>Tambah Mahasiswa Baru</h2>

        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" required value="{{ old('nim') }}">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required value="{{ old('nama') }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label>Fakultas</label>
                <select name="fakultas_id" id="fakultas_id" required>
                    <option value="">-- Pilih Fakultas --</option>
                    @foreach ($fakultas as $fak)
                        <option value="{{ $fak->id }}" {{ old('fakultas_id') == $fak->id ? 'selected' : '' }}>{{ $fak->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Pembimbing Akademik</label>
                <select name="dosen_id" id="dosen_id">
                    <option value="">-- Pilih Dosen --</option>
                    @foreach ($dosen as $d)
                        <option value="{{ $d->id }}" {{ old('dosen_id') == $d->id ? 'selected' : '' }}>{{ $d->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn">Simpan</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn" style="background: #666;">Batal</a>
            </div>
        </form>
    </div>

    <script>
        const fakultasSelect = document.getElementById('fakultas_id');
        const dosenSelect = document.getElementById('dosen_id');

        fakultasSelect.addEventListener('change', function() {
            const fakultasId = this.value;
            
            if (!fakultasId) {
                dosenSelect.innerHTML = '<option value="">-- Pilih Dosen --</option>';
                return;
            }

            fetch(`/api/dosen/${fakultasId}`)
                .then(response => response.json())
                .then(data => {
                    dosenSelect.innerHTML = '<option value="">-- Pilih Dosen --</option>';
                    data.forEach(dosen => {
                        const option = document.createElement('option');
                        option.value = dosen.id;
                        option.textContent = dosen.nama;
                        dosenSelect.appendChild(option);
                    });
                });
        });

        if (fakultasSelect.value) {
            fakultasSelect.dispatchEvent(new Event('change'));
        }
    </script>
@endsection
