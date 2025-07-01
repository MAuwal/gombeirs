<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxpayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'taxpayer_type',
        'taxpayer_id',
        'state',
        'lga',
        'ward',
        'address',
        'user_id',
        'user_name',
    ];
}
