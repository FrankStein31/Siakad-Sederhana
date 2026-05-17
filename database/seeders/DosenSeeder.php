<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        Dosen::create([
            'nip' => '198501012010011001',
            'nama' => 'Benni',
            'fakultas_id' => 1
        ]);
        Dosen::create([
            'nip' => '197803152005012002',
            'nama' => 'Luluk',
            'fakultas_id' => 1
        ]);
        Dosen::create([
            'nip' => '196912201998031003',
            'nama' => 'Suwandi',
            'fakultas_id' => 3
        ]);
        Dosen::create([
            'nip' => '198207082009012004',
            'nama' => 'Fadelis',
            'fakultas_id' => 3
        ]);
    }
}
