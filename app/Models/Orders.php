<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'OrderID',
        'CustomerID',
        'EmployeeID',
        'OrderDate',
        'RequireDate',
        'ShippedDate',
        'ShipperID',
        'ShipVia',
        'Freight',
        'ShipName',
        'ShipAddress',
        'ShipCity',
        'ShipRegion',
        'ShipPostalCode',
        'ShipCountry',
    ];

    public function orderdetails()
    {

        return $this->hasMany(Orderdetails::class, 'OrderID', 'OrderID');
    }

    public function employees()
    {

        return $this->belongsTo(Employees::class, 'EmployeeID', 'EmployeeID');
    }

    public function customers()
    {

        return $this->belongsTo(Customers::class, 'CustomerID', 'CustomerID');
    }

    public function shippers()
    {

        return $this->belongsTo(Shippers::class, 'ShipperID', 'ShipperID');
    }
}
