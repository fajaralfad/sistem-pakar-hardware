<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejalas';

    protected $fillable = ['nama_gejala', 'keterangan'];

    // Relasi ke Aturan
    public function aturans()
    {
        return $this->hasMany(Aturan::class);
    }
}
