<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat_box extends Model
{
    use HasFactory;

    protected $table = "chat_box";

    public $timestamps = false;
    protected $fillable = [
        'id',
        'user_addressee_id',
        'user_messenger_id',
        'messages',
        'created_at',
    ];
}