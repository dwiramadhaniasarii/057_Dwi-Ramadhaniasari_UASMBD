<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    public $table = "Customers";
    use HasFactory;
    Protected $fillable = [
        'CustomersID',
        'CompanyName',
        'ContactName',
        'ContactTittle',
        'Address',
        'Region',
        'PostalCode',
    ];

    public function products()
    {
        return $this->hasMany(Orders::class, 'CategoryID', 'CategoryID');
    }
}
