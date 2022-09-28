<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'fullname',
        'body',
        'email',
        'user_id'
    ];
}
