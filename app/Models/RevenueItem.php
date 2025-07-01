<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevenueItem extends Model
{
    protected $fillable = ['revenue_item_code', 'revenue_item'];


    public function agencies()
    {
        return $this->belongsToMany(Agency::class)
            ->withPivot('rate')
            ->withTimestamps();
    }
}
