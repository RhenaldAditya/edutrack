<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model //table subjects atau pelajaran
{
    protected $table ='subjects';
    protected $fillable = ['nama_mata_pelajaran','deskripsi_pelajaran'];
}
