<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'invoice_number',
    'customer_number',
    'customer_name',
    'fiscal_data',
    'order_datetime',
    'delivery_address',
    'notes',
    'status_id',
    'is_deleted'
    ];

    public function status()
    {
        return $this->belongsTo(OrderStatus::class, 'status_id');
    }

    public function photos()
    {
        return $this->hasMany(PhotoEvidence::class);
    }
}
