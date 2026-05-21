<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        Dosen::create(['nip' => '198501012010011001', 'nama' => 'Benni', 'fakultas_id' => 1]);
        Dosen::create(['nip' => '197803152005012002', 'nama' => 'Luluk', 'fakultas_id' => 1]);
        Dosen::create(['nip' => '196912201998031003', 'nama' => 'Suwandi', 'fakultas_id' => 3]);
        Dosen::create(['nip' => '198207082009012004', 'nama' => 'Fadelis', 'fakultas_id' => 3]);
        Dosen::create(['nip' => '198601152011011005', 'nama' => 'Rini Suryani', 'fakultas_id' => 1]);
        Dosen::create(['nip' => '198702202012012006', 'nama' => 'Ahmad Wijaya', 'fakultas_id' => 2]);
        Dosen::create(['nip' => '198803252013013007', 'nama' => 'Siti Nurhaliza', 'fakultas_id' => 3]);
        Dosen::create(['nip' => '198904302014014008', 'nama' => 'Budi Santoso', 'fakultas_id' => 1]);
        Dosen::create(['nip' => '199005112015015009', 'nama' => 'Ani Kartika', 'fakultas_id' => 2]);
        Dosen::create(['nip' => '199106152016016010', 'nama' => 'Hendra Kusuma', 'fakultas_id' => 3]);
        Dosen::create(['nip' => '199207202017017011', 'nama' => 'Dewi Lestari', 'fakultas_id' => 1]);
        Dosen::create(['nip' => '199308252018018012', 'nama' => 'Eko Prasetyo', 'fakultas_id' => 2]);
        Dosen::create(['nip' => '199409302019019013', 'nama' => 'Rina Wijaya', 'fakultas_id' => 3]);
        Dosen::create(['nip' => '199510112020020014', 'nama' => 'Taufik Rahman', 'fakultas_id' => 1]);
        Dosen::create(['nip' => '199611202021021015', 'nama' => 'Maya Putri', 'fakultas_id' => 2]);
        Dosen::create(['nip' => '199712252022022016', 'nama' => 'Irfan Harahap', 'fakultas_id' => 3]);
        Dosen::create(['nip' => '199813302023023017', 'nama' => 'Lisa Anggraini', 'fakultas_id' => 1]);
        Dosen::create(['nip' => '199914112024024018', 'nama' => 'Bambang Setiawan', 'fakultas_id' => 2]);
        Dosen::create(['nip' => '200015152025025019', 'nama' => 'Ratna Dewi', 'fakultas_id' => 3]);
        Dosen::create(['nip' => '200116202026026020', 'nama' => 'Gunawan Suryanto', 'fakultas_id' => 1]);
        Dosen::create(['nip' => '200217252027027021', 'nama' => 'Lia Sukma', 'fakultas_id' => 2]);
    }
}
