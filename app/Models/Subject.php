<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function teachers(): HasMany // Perhatikan 'teachers' (plural) karena bisa banyak guru, atau satu mata pelajaran dapat diampu banyak guru
    {
        // Eloquent akan mencari 'subject_id' di tabel 'teachers'
        // untuk mencocokkan dengan 'id' di tabel 'subjects'.
        return $this->hasMany(Teacher::class, 'subject_id', 'id');
        // Atau cukup:
        // return $this->hasMany(Teacher::class); // Jika nama foreign key adalah 'subject_id' dan PK target 'id'
    }
}