<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    protected $table ='teachers';
    protected $fillable = ['id_pengajar', 'nama_pengajar', 'subject_id'];

    // Relasi ke Subject
    public function subject(): BelongsTo //setiap guru hanya mempunyai 1 subject/mapel
    {
        // Eloquent akan mencari 'subject_id' di tabel 'teachers'
        // untuk mencocokkan dengan 'id' di tabel 'subjects'.
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
        // Atau cukup:
        // return $this->belongsTo(Subject::class); // Jika nama foreign key adalah 'subject_id' dan PK target 'id'
    }
}
