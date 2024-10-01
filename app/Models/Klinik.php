<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jenis',
        'alamat',
        'nomor_telepon',
        'jam_buka',
        'jam_tutup',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
