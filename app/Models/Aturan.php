<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    use HasFactory;

    protected $fillable = ['gejala_id', 'kerusakan_id', 'nilai_kepercayaan'];

    // Relasi ke Gejala
    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }

    // Relasi ke Kerusakan
    public function kerusakan()
    {
        return $this->belongsTo(Kerusakan::class);
    }
}
