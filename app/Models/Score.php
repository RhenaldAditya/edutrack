<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table ='scores';
    protected $fillable = [
        'student_id',
        'subject_id',
        'nilai_tugas',
        'nilai_ujian',
        'nilai_partisipasi',
        'nilai_total'
    ];

    // Relasi ke Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    // // Relasi ke Student
    // public function student()
    // {
    //     return $this->belongsTo(Student::class);
    // }
}
