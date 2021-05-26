<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesdone extends Model
{
    protected $table='salesdone';
    protected $fillable=['product_id',
    'user_id',
    'product_name',
    'description',
    'price'
    
                
    ];
}
