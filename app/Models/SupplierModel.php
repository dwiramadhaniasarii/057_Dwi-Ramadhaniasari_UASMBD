<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    public $table = "Suppliers";
    use HasFactory;
    Protected $fillable = [
        'CompanyName',
        'ContactName',
        'ContactTittle',
        'Address',
        'Region',
        'PostalCode',
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'SupplierID', 'SupplierID');
    }
}
