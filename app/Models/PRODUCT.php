<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRODUCT extends Model
{
    use HasFactory;

    protected $table='product';
    
    protected $fillable = [
        'nama',
        'link'
    ];

}
