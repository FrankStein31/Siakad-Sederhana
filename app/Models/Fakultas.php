<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $fillable = ['nama'];
    protected $table = 'fakultas';

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }

    public function dosens()
    {
        return $this->hasMany(Dosen::class);
    }
}
