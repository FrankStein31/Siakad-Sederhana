<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nim', 'nama', 'email', 'fakultas_id', 'dosen_id', 'status'];
    protected $table = 'mahasiswas';

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function mataKuliahs()
    {
        return $this->belongsToMany(MataKuliah::class, 'krses', 'mahasiswa_id', 'mata_kuliah_id');
    }
}
