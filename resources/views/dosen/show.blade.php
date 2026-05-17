@extends('layouts.app')

@section('title', 'Detail Dosen')

@section('content')
    <div style="display: flex; gap: 2rem; margin-bottom: 2rem;">
        <a href="{{ route('dosen.index') }}" class="btn">← Kembali</a>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
        <!-- Kolom Kiri: Data Diri Dosen -->
        <div class="card">
            <h2 style="margin-bottom: 1.5rem; color: #1a1a1a;">Data Diri Dosen</h2>
            
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <div>
                    <label style="display: block; color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">NIP</label>
                    <div style="padding: 0.75rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #1a1a1a;">
                        {{ $dosen->nip }}
                    </div>
                </div>

                <div>
                    <label style="display: block; color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Nama</label>
                    <div style="padding: 0.75rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #1a1a1a;">
                        {{ $dosen->nama }}
                    </div>
                </div>

                <div>
                    <label style="display: block; color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Fakultas</label>
                    <div style="padding: 0.75rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #1a1a1a;">
                        {{ $dosen->fakultas->nama }}
                    </div>
                </div>

                <div>
                    <label style="display: block; color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Jumlah Mahasiswa yang Dibimbing</label>
                    <div style="padding: 0.75rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #1a1a1a; font-size: 1.25rem; font-weight: bold;">
                        {{ $dosen->mahasiswas->count() }} Mahasiswa
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: List Mahasiswa -->
        <div class="card">
            <h2 style="margin-bottom: 1.5rem; color: #1a1a1a;">Daftar Mahasiswa Bimbingan</h2>
            
            @if ($dosen->mahasiswas->count() > 0)
                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    @foreach ($dosen->mahasiswas as $mahasiswa)
                        <div style="padding: 1rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px;">
                            <div style="margin-bottom: 0.5rem;">
                                <strong style="color: #1a1a1a;">{{ $mahasiswa->nama }}</strong>
                            </div>
                            <div style="font-size: 0.9rem; color: #666; display: flex; flex-direction: column; gap: 0.25rem;">
                                <div>NIM: {{ $mahasiswa->nim }}</div>
                                <div>Email: {{ $mahasiswa->email }}</div>
                                <div>Fakultas: {{ $mahasiswa->fakultas->nama }}</div>
                                <div>Status: <span style="padding: 0.25rem 0.5rem; background: #e8f4f8; border-radius: 3px; color: #1a1a1a;">{{ $mahasiswa->status }}</span></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div style="padding: 2rem; text-align: center; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #666;">
                    Tidak ada mahasiswa yang dibimbing oleh dosen ini
                </div>
            @endif
        </div>
    </div>
@endsection
