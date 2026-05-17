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
            'nama' => 'Elisa Senger',
            'email' => 'elisa@example.org',
            'fakultas_id' => 1,
            'dosen_id' => 1,
            'status' => 'Aktif'
        ]);
        Mahasiswa::create([
            'nim' => '20268703',
            'nama' => 'Arielle Cummings',
            'email' => 'arielle@example.org',
            'fakultas_id' => 2,
            'dosen_id' => 2,
            'status' => 'Aktif'
        ]);
        Mahasiswa::create([
            'nim' => '20265699',
            'nama' => 'Lottie McCullough',
            'email' => 'lottie@example.org',
            'fakultas_id' => 1,
            'dosen_id' => 1,
            'status' => 'Aktif'
        ]);
        Mahasiswa::create([
            'nim' => '20263429',
            'nama' => 'Dr. Bruce Cassin MD',
            'email' => 'bruce@example.org',
            'fakultas_id' => 3,
            'dosen_id' => 3,
            'status' => 'Aktif'
        ]);
    }
}