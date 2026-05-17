<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    public function run(): void
    {
        Fakultas::create(['nama' => 'Teknik dan Informatika']);
        Fakultas::create(['nama' => 'Ekonomi dan Bisnis']);
        Fakultas::create(['nama' => 'Keguruan dan Ilmu Pendidikan']);
    }
}
