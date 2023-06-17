<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'OrderID',
        'ProductID',
        'UnitPrice',
        'Quantity',
        'Discount',
    ];

    public function products()
    {

        return $this->belongsTo(Products::class, 'ProductID', 'ProductID');
    }

    public function orders()
    {

        return $this->belongsTo(Orders::class, 'OrderID', 'OrderID');
    }
}
