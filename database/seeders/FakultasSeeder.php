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
        Fakultas::create(['nama' => 'Sains dan Teknologi']);
        Fakultas::create(['nama' => 'Hukum']);
        Fakultas::create(['nama' => 'Kesehatan']);
        Fakultas::create(['nama' => 'Pertanian']);
        Fakultas::create(['nama' => 'Arsitektur']);
        Fakultas::create(['nama' => 'Ilmu Sosial dan Politik']);
        Fakultas::create(['nama' => 'Psikologi']);
        Fakultas::create(['nama' => 'Seni dan Budaya']);
        Fakultas::create(['nama' => 'Olahraga']);
    }
}
