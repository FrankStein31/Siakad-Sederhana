<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        MataKuliah::create(['kode' => 'MK-0649', 'nama' => 'Pemrograman Web', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-4574', 'nama' => 'Penulisan Ilmiah', 'sks' => 2]);
        MataKuliah::create(['kode' => 'MK-6865', 'nama' => 'Manajemen Bisnis', 'sks' => 2]);
        MataKuliah::create(['kode' => 'MK-1122', 'nama' => 'Struktur Data', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-3390', 'nama' => 'Laporan Kerja', 'sks' => 3]);
    }
}
