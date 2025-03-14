<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nim',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'no_hp',
        'email',
        'foto',
        'alamat_id',
        'agama_id',
        'angkatan',
        'dosen_id',
        'fakultas_id',
        'jurusan_id',
        'prodi_id',
        'periode_id',
        'status_kuliah',
        'status_masuk',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}
