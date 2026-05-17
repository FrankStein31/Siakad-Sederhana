@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <div style="display: flex; gap: 2rem; margin-bottom: 2rem;">
        <a href="{{ route('mahasiswa.index') }}" class="btn">← Kembali</a>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
        <!-- Kolom Kiri: Data Diri Mahasiswa -->
        <div class="card">
            <h2 style="margin-bottom: 1.5rem; color: #1a1a1a;">Data Diri Mahasiswa</h2>
            
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <div>
                    <label style="display: block; color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">NIM</label>
                    <div style="padding: 0.75rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #1a1a1a;">
                        {{ $mahasiswa->nim }}
                    </div>
                </div>

                <div>
                    <label style="display: block; color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Nama</label>
                    <div style="padding: 0.75rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #1a1a1a;">
                        {{ $mahasiswa->nama }}
                    </div>
                </div>

                <div>
                    <label style="display: block; color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Email</label>
                    <div style="padding: 0.75rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #1a1a1a;">
                        {{ $mahasiswa->email }}
                    </div>
                </div>

                <div>
                    <label style="display: block; color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Fakultas</label>
                    <div style="padding: 0.75rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #1a1a1a;">
                        {{ $mahasiswa->fakultas->nama }}
                    </div>
                </div>

                <div>
                    <label style="display: block; color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Pembimbing Akademik</label>
                    <div style="padding: 0.75rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #1a1a1a;">
                        {{ $mahasiswa->dosen ? $mahasiswa->dosen->nama : '-' }}
                    </div>
                </div>

                <div>
                    <label style="display: block; color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">Status</label>
                    <div style="padding: 0.75rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #1a1a1a;">
                        <span style="padding: 0.25rem 0.75rem; background: #e8f4f8; border-radius: 3px; color: #1a1a1a;">{{ $mahasiswa->status }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Mata Kuliah yang Diambil -->
        <div class="card">
            <h2 style="margin-bottom: 1.5rem; color: #1a1a1a;">Mata Kuliah yang Diambil</h2>
            
            @if ($mahasiswa->mataKuliahs->count() > 0)
                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    @php
                        $totalSks = $mahasiswa->mataKuliahs->sum('sks');
                    @endphp
                    
                    @foreach ($mahasiswa->mataKuliahs as $mk)
                        <div style="padding: 1rem; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px;">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 0.5rem;">
                                <strong style="color: #1a1a1a;">{{ $mk->kode }}</strong>
                                <span style="padding: 0.25rem 0.75rem; background: #2a2a2a; color: #f8f8f8; border-radius: 3px; font-size: 0.85rem;">{{ $mk->sks }} SKS</span>
                            </div>
                            <div style="font-size: 0.9rem; color: #666;">
                                {{ $mk->nama }}
                            </div>
                        </div>
                    @endforeach

                    <div style="padding: 1rem; background: #2a2a2a; border: 1px solid #1a1a1a; border-radius: 4px; margin-top: 0.5rem;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: #f8f8f8; font-weight: bold;">Total SKS:</span>
                            <strong style="color: #f8f8f8; font-size: 1.25rem;">{{ $totalSks }}</strong>
                        </div>
                    </div>
                </div>
            @else
                <div style="padding: 2rem; text-align: center; background: #f8f8f8; border: 1px solid #ddd; border-radius: 4px; color: #666;">
                    Belum ada mata kuliah yang diambil
                </div>
            @endif
        </div>
    </div>
@endsection
