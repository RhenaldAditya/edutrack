<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademyReport extends Model
{
    protected $table ='academy_reports';
    protected $fillable = ['student_id', 'rata_rata_nilai','peringkat'];
}
