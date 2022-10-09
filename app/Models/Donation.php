<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'tx_ref',
        'transaction_id',
        'reference',
        'method',
        'email',
        'name',
    ];
}
