<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;

    protected $fillable = ['id_spp', 'tahun', 'nominal'];

    protected $table = 'spp';

    public function getNominalAttribute($nominal)
    {
        return format_idr($nominal);
    }
}
