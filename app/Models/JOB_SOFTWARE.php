<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JOB_SOFTWARE extends Model
{
    use HasFactory;

    protected $table='job_software';
    
    protected $fillable = [
        'ID_JOB',
        'nama',
        'software'
    ];

}
