<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table='staff';
    protected $fillable=['sname',
    'saddress',
    'sphone',
    'semail',
    'sgender',
    'sdesignation',
    'ssalary',
    'sdoj',
                
    ];
}
