<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'klinik_id', // Pastikan kolom ini ada jika diperlukan
        'dokter_id',
        'nama_hewan',
        'jenis_hewan',
        'keluhan',
        'appointment_date',
        'appointment_time',
    ];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
