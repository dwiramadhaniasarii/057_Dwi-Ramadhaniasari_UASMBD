<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $table = "Products";
    use HasFactory;

    protected $fillable = [
        'ProductID',
        'ProductName',
        'SupplierID',
        'CategoryID',
        'QuantityPerUnit',
        'UnitPrice',
        'UnitInStock',
        'UnitOnOrder',
        'ReorderLevel',
        'Discontinued',
    ];
    public function suppliers()
    {

        return $this->belongsTo(SupplierModel::class, 'SupplierID', 'SupplierID');
    }

    public function categories()
    {

        return $this->belongsTo(Categories::class, 'CategoryID', 'CategoryID');
    }
}
