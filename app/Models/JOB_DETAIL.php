<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JOB_DETAIL extends Model
{
    use HasFactory;

    protected $table='job_detail';
    
    protected $fillable = [
        'ID_JOB',
        'nama',
        'paragraf'
    ];

}
