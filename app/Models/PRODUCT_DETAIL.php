<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRODUCT_DETAIL extends Model
{
    use HasFactory;

    protected $table='product_detail';
    
    protected $fillable = [
        'ID_PRODUCT',
        'paragraf'
    ];

}
