<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serviceprovider extends Model
{
    use HasFactory;

    protected $fillable = [
        'image' ,
        'user_id',
        'numberId',
        'brief',
        'status'
    ];

}