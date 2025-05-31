<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table ='students';
    protected $fillable = ['nama_siswa','alamat_siswa','tanggal_lahir_siswa','username'];

    public function scores()
    {
        return $this->hasMany(Score::class, 'student_id', 'id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'scores', 'student_id', 'subject_id');
    }

}
