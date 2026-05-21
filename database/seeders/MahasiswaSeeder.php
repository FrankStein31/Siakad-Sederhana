<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create(['nim' => '20267422', 'nama' => 'Frankie', 'email' => 'frankie@gmail.com', 'fakultas_id' => 1, 'dosen_id' => 1, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20268703', 'nama' => 'Clarissa', 'email' => 'clarissa@gmail.com', 'fakultas_id' => 1, 'dosen_id' => 2, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20265699', 'nama' => 'Ananda', 'email' => 'ananda@gmail.com', 'fakultas_id' => 1, 'dosen_id' => 1, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20263429', 'nama' => 'Julius', 'email' => 'julius@gmail.com', 'fakultas_id' => 3, 'dosen_id' => 3, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269001', 'nama' => 'Rina Sukma', 'email' => 'rina@gmail.com', 'fakultas_id' => 1, 'dosen_id' => 2, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269002', 'nama' => 'Ahmad Pratama', 'email' => 'ahmad.pratama@gmail.com', 'fakultas_id' => 1, 'dosen_id' => 1, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269003', 'nama' => 'Siti Maulida', 'email' => 'siti.maulida@gmail.com', 'fakultas_id' => 2, 'dosen_id' => 4, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269004', 'nama' => 'Budi Hartanto', 'email' => 'budi.hartanto@gmail.com', 'fakultas_id' => 2, 'dosen_id' => 4, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269005', 'nama' => 'Dewi Putri', 'email' => 'dewi.putri@gmail.com', 'fakultas_id' => 1, 'dosen_id' => 2, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269006', 'nama' => 'Eko Wardana', 'email' => 'eko.wardana@gmail.com', 'fakultas_id' => 3, 'dosen_id' => 3, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269007', 'nama' => 'Farah Aziza', 'email' => 'farah.aziza@gmail.com', 'fakultas_id' => 1, 'dosen_id' => 1, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269008', 'nama' => 'Gita Restiana', 'email' => 'gita.restiana@gmail.com', 'fakultas_id' => 2, 'dosen_id' => 4, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269009', 'nama' => 'Hendra Wijaya', 'email' => 'hendra.wijaya@gmail.com', 'fakultas_id' => 1, 'dosen_id' => 2, 'status' => 'Tidak Aktif']);
        Mahasiswa::create(['nim' => '20269010', 'nama' => 'Irene Santoso', 'email' => 'irene.santoso@gmail.com', 'fakultas_id' => 3, 'dosen_id' => 3, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269011', 'nama' => 'Joko Supriyanto', 'email' => 'joko.supriyanto@gmail.com', 'fakultas_id' => 2, 'dosen_id' => 4, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269012', 'nama' => 'Kemala Sari', 'email' => 'kemala.sari@gmail.com', 'fakultas_id' => 1, 'dosen_id' => 1, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269013', 'nama' => 'Luthfi Hidayat', 'email' => 'luthfi.hidayat@gmail.com', 'fakultas_id' => 3, 'dosen_id' => 3, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269014', 'nama' => 'Mega Pratiwi', 'email' => 'mega.pratiwi@gmail.com', 'fakultas_id' => 2, 'dosen_id' => 4, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269015', 'nama' => 'Nando Kusuma', 'email' => 'nando.kusuma@gmail.com', 'fakultas_id' => 1, 'dosen_id' => 2, 'status' => 'Aktif']);
        Mahasiswa::create(['nim' => '20269016', 'nama' => 'Olivia Sephira', 'email' => 'olivia.sephira@gmail.com', 'fakultas_id' => 3, 'dosen_id' => 3, 'status' => 'Tidak Aktif']);
        Mahasiswa::create(['nim' => '20269017', 'nama' => 'Pria Mulyawan', 'email' => 'pria.mulyawan@gmail.com', 'fakultas_id' => 1, 'dosen_id' => 1, 'status' => 'Aktif']);
    }
}