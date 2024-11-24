<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kerusakan', 'deskripsi'];

    // Relasi ke Aturan
    public function aturans()
    {
        return $this->hasMany(Aturan::class);
    }
}
