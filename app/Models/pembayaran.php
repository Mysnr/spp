<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = ['id_petugas', 'id_spp', 'nisn', 'tgl_bayar', 'bulan_dibayar', 'tahun_dibayar', 'jumlah_bayar'];

    protected $table = 'pembayaran';

    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'nisn', 'nisn');
    }
    public function spp()
    {
        return $this->belongsTo(Spp::class, 'id_spp');
    }
}
