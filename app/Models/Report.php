<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Report extends Model
{
    use HasRoles;

    protected $fillable = ['taxpayer_name', 
    'agency_name', 
    'revenue_item_name', 
    'rate', 
    'transaction_ref'];
    
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
}
