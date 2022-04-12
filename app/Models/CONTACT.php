<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CONTACT extends Model
{
    use HasFactory;

    protected $table='user_contact';
    
    protected $fillable = [
        'whatsapp',
        'facebook',
        'instagram',
        'twitter'
    ];

}
