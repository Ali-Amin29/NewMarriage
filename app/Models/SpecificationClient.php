<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationClient extends Model
{
    use HasFactory;
    protected $fillable = [
        'realName',
        'user_ID',
        'gender',
        'city',
        'state',
        'address',
        'kidsNumber',
        'maritalStatus',
        'education',
        'religious',
        'country',
        'age',
        'jobs',
        'HealthStatus',
        'beauty',
        'length',
        'weight',
        'skinColour',
        'breif'

    ];
    protected $table = 'specification_client';
}
