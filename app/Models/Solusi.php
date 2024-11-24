<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    use HasFactory;

    protected $fillable = ['nama_solusi', 'langkah_solusi'];

    // Relasi ke Kerusakan (jika solusi terkait kerusakan)
    // Tambahkan jika ada kebutuhan, misalnya:
    // public function kerusakan()
    // {
    //     return $this->belongsTo(Kerusakan::class);
    // }
}
