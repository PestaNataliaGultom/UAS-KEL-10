<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'ticket_id',
        'amount',
        'status',
        'transaction_id',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    public function getAmountAttribute($value)
    {
        return 'Rp ' . number_format($value, 2, ',', '.');
    }
}
