<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MDA extends Model
{
    use HasFactory;

    protected $fillable = [
        'mda_name',
        'mda_code',
    ];
}
