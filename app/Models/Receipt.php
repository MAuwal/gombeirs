<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = ['payment_id', 'taxpayer_id', 'name', 'amount', 'content'];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function taxpayer()
    {
        return $this->belongsTo(Taxpayer::class);
    }
}
