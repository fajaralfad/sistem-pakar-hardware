<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    use HasFactory;

    protected $table = 'solusis';

    protected $fillable = [
        'nama_solusi',
        'langkah_solusi',
        'kerusakan_id', // Foreign key ke kerusakan
    ];

    public function kerusakan()
    {
        return $this->belongsTo(Kerusakan::class);
    }
}
