<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JOB extends Model
{
    use HasFactory;

    protected $table='job';
    
    protected $fillable = [
        'ID_JOB',
        'NAMA'
    ];

}
