<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $fillable = ['kode', 'nama', 'sks'];
    protected $table = 'mata_kuliahs';

    public function mahasiswas()
    {
        return $this->belongsToMany(Mahasiswa::class, 'krses', 'mata_kuliah_id', 'mahasiswa_id');
    }
}
