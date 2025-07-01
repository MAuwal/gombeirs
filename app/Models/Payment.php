<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function taxpayer()
    {
        return $this->belongsTo(Taxpayer::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function revenueItem()
    {
        return $this->belongsTo(RevenueItem::class);
    }

    protected $fillable = [
        'data',
        'Event',
        'TransactionRef',
        'transaction_ref',
        'Body',
        'amount',
        'gateway_ref',
        'transaction_status',
        'email',
        'merchant_id',
        'currency',
        'transaction_type',
        'merchant_amount',
        'customer_mobile',
        'meta',
        'payment_information',
        'payment_type',
        'pan',
        'plan',
        'recurring_id',
        'card_type',
        'customer_ref',
        'is_recurring',
        'token_id',
    ];

    protected $casts = [
        'data' => 'json',
        'Body' => 'array',
        'meta' => 'json',
    ];

    
    // protected $fillable = [
    //     'Event',
    //     'TransactionRef',
    //     'Body',
    //     'amount',
    //     'gateway_ref',
    //     'transaction_status',
    //     'email',
    //     'merchant_id',
    //     'currency',
    //     'transaction_type',
    //     'merchant_amount',
    //     'customer_mobile',
    //     'meta',
    //     'payment_information',
    //     'payment_type',
    //     'pan',
    //     'plan',
    //     'recurring_id',
    //     'card_type',
    //     'customer_ref',
    //     'token_id',
    // ];

    // protected $casts = [
    //     'payment_information' => 'array',
    // ];
}
