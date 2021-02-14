<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['id_kelas', 'id_spp', 'nisn', 'nis', 'nama', 'alamat', 'no_telp'];

    protected $table = 'siswa';

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
