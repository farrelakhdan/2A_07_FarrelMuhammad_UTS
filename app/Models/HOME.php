<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HOME extends Model
{
    use HasFactory;

    protected $table='home';
    
    protected $fillable = [
        'paragraf'
    ];

}
