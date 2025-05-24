<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mata_pelajaran',
        'deskripsi_pelajaran',
    ];

    // Relasi ke Score (jika ingin melihat semua nilai untuk mata pelajaran ini)
    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}