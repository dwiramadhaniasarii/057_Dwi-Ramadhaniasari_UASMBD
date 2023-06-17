<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shippers extends Model
{
    Protected $fillable = [
        'ShipperID',
        'CompanyName',
        'Phone',
    ];

    public function products()
    {
        return $this->hasMany(Orders::class, 'ShipperID', 'ShipperID');
    }
}
