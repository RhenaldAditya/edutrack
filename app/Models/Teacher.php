<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table ='teachers';
    protected $fillable = ['id_pengajar', 'nama_pengajar', 'subject_id'];
}
