<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create([
            'nim' => '20267422',
            'nama' => 'Frankie',
            'email' => 'frankie@gmail.com',
            'fakultas_id' => 1,
            'dosen_id' => 1,
            'status' => 'Aktif'
        ]);
        Mahasiswa::create([
            'nim' => '20268703',
            'nama' => 'Clarissa',
            'email' => 'clarissa@gmail.com',
            'fakultas_id' => 2,
            'dosen_id' => 2,
            'status' => 'Aktif'
        ]);
        Mahasiswa::create([
            'nim' => '20265699',
            'nama' => 'Ananda',
            'email' => 'ananda@gmail.com',
            'fakultas_id' => 1,
            'dosen_id' => 1,
            'status' => 'Aktif'
        ]);
        Mahasiswa::create([
            'nim' => '20263429',
            'nama' => 'Julius',
            'email' => 'julius@gmail.com',
            'fakultas_id' => 3,
            'dosen_id' => 3,
            'status' => 'Aktif'
        ]);
    }
}