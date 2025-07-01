<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UBA extends Model
{
    use HasFactory;

    protected $fillable = [
        'payer_name', 'agency_name', 'subhead', 'amount',
        'transaction_ref', 'date', 'account_no', 'account_name', 'description',
    ];

}
