<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationRequired extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_ID',
        'gender',
        'city',
        'state',
        'address',
        'kidsNumber',
        'maritalStatus',
        'education',
        'religious',
        'age',
        'jobs',
        'HealthStatus',
        'beauty',
        'length',
        'weight',
        'skinColour',
        'breif'

    ];
    protected $table = 'specification_required';
}