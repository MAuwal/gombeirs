<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaydirectPaymentNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_group_code',
        'payment_log_id',
        'cust_reference',
        'alternate_cust_reference',
        'amount',
        'payment_status',
        'payment_method',
        'payment_reference',
        'terminal_id',
        'channel_name',
        'location',
        'is_reversal',
        'payment_date',
        'settlement_date',
        'institution_id',
        'institution_name',
        'branch_name',
        'bank_name',
        'fee_name',
        'customer_name',
        'other_customer_info',
        'receipt_no',
        'collections_account',
        'third_party_code',
        'payment_items',
        'bank_code',
        'customer_address',
        'customer_phone_number',
        'depositor_name',
        'deposit_slip_number',
        'payment_currency',
        'original_payment_log_id',
        'original_payment_reference',
        'teller'
    ];
}
