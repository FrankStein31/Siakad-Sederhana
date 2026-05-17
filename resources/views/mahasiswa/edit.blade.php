@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
    <div class="card">
        <h2>Edit Mahasiswa</h2>

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" required value="{{ $mahasiswa->nim }}">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required value="{{ $mahasiswa->nama }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required value="{{ $mahasiswa->email }}">
            </div>
            <div class="form-group">
                <label>Fakultas</label>
                <select name="fakultas_id" id="fakultas_id" required>
                    <option value="">-- Pilih Fakultas --</option>
                    @foreach ($fakultas as $fak)
                        <option value="{{ $fak->id }}" {{ $mahasiswa->fakultas_id == $fak->id ? 'selected' : '' }}>{{ $fak->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Pembimbing Akademik</label>
                <select name="dosen_id" id="dosen_id">
                    <option value="">-- Pilih Dosen --</option>
                    @foreach ($dosen as $d)
                        <option value="{{ $d->id }}" {{ $mahasiswa->dosen_id == $d->id ? 'selected' : '' }}>{{ $d->nama }}</option>
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
        const currentDosenId = "{{ $mahasiswa->dosen_id }}";

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
                        if (dosen.id == currentDosenId) {
                            option.selected = true;
                        }
                        dosenSelect.appendChild(option);
                    });
                });
        });

        if (fakultasSelect.value) {
            fakultasSelect.dispatchEvent(new Event('change'));
        }
    </script>
@endsection
