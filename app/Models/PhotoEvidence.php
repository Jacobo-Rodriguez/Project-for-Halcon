<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoEvidence extends Model
{
    protected $table = 'photo_evidences';

    protected $fillable = [
        'order_id',
        'type',
        'file_path'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}