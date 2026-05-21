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
        MataKuliah::create(['kode' => 'MK-2001', 'nama' => 'Database Design', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2002', 'nama' => 'Cloud Computing', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2003', 'nama' => 'Mobile App Development', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2004', 'nama' => 'Cybersecurity', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2005', 'nama' => 'Artificial Intelligence', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2006', 'nama' => 'Machine Learning', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2007', 'nama' => 'Network Security', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2008', 'nama' => 'Software Engineering', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2009', 'nama' => 'User Interface Design', 'sks' => 2]);
        MataKuliah::create(['kode' => 'MK-2010', 'nama' => 'Entrepreneurship', 'sks' => 2]);
        MataKuliah::create(['kode' => 'MK-2011', 'nama' => 'Project Management', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2012', 'nama' => 'Data Science', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2013', 'nama' => 'Web Services', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2014', 'nama' => 'System Administration', 'sks' => 3]);
        MataKuliah::create(['kode' => 'MK-2015', 'nama' => 'Linux Administration', 'sks' => 2]);
    }
}
