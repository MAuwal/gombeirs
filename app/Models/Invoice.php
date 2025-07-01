<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['taxpayer_name', 
    'agency_name', 
    'revenue_item_name', 
    'rate', 
    'status',
    'transaction_ref',
    'details',
    'address',
    'invoice_id'];
    
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }
    
}
