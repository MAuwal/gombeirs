<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'agency_id',
        'revenue_item_id',
        'user_id',
        'rate',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
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
}
