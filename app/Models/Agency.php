<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
        'agency_name',
        'agency_code',
    ];
    
    public function revenueItems()
    {
        return $this->belongsToMany(RevenueItem::class)
            ->withPivot('rate')
            ->withTimestamps();
    }
    
}
