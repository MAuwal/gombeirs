<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
// use Illuminate\Database\Eloquent\Concerns\AutoIncrement;
use Illuminate\Database\Eloquent\SoftDeletes;
// use illuminate\Database\Eloquent\Concerns\AutoIncrementing;


class Tcc extends Model
{
    use HasFactory, HasTimestamps, SoftDeletes;

    protected $fillable = [
        'name',
        'doi',
        'ed',
        'rc',
        'date_of_incorporation',
        'gtin',
        'tin',
        'business_address',
        'business_status',
        'Chargeableyr1',
        'taxpaidyr1',
        'receiptidyr1',
        'issuedateyr1',
        'Chargeableyr2',
        'taxpaidyr2',
        'issuedateyr2',
        'receiptidyr2',
        'Chargeableyr3',
        'taxpaidyr3',
        'receiptidyr3',
        'issuedateyr3',
        'tccType',
        'sourcrOfInc',
        'othercomment',
        'certificateExpires',
    ];
}



