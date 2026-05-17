<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        MataKuliah::create(['kode' => 'MK-0649', 'nama' => 'Insurance Sales Agent Thursday', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-4574', 'nama' => 'Physician Saturday', 'sks' => 2]);
        MataKuliah::create(['kode' => 'MK-6865', 'nama' => 'Shuttle Car Operator Saturday', 'sks' => 2]);
        MataKuliah::create(['kode' => 'MK-1122', 'nama' => 'Command Control Center Specialist', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-3390', 'nama' => 'Database Systems', 'sks' => 3]);
    }
}
