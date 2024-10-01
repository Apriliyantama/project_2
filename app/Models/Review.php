<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function klinik()
    {
        return $this->belongsTo(Klinik::class); // Adjust this if your relationship is different
    }
}
