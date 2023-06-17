<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productData =[
            [
                'ProductName' => 'Kain Sifon',
                'SupplierID' => '1',
                'CategoryID' => '1',
                'QuantityPerUnit' => '20',
                'UnitPrice' => '80000',
                'UnitInStock' => '50',
                'UnitOnOrder' => '50',
                'ReorderLevel' => '150',
                'Discontinued' => '3',
            ],[
                'ProductName' => 'Kain Denim',
                'SupplierID' => '1',
                'CategoryID' => '1',
                'QuantityPerUnit' => '25',
                'UnitPrice' => '50000',
                'UnitInStock' => '50',
                'UnitOnOrder' => '50',
                'ReorderLevel' => '350',
                'Discontinued' => '3',
            ],[
                'ProductName' => 'Kertas HVS A4 80g 1 Rim',
                'SupplierID' => '2',
                'CategoryID' => '2',
                'QuantityPerUnit' => '80',
                'UnitPrice' => '60000',
                'UnitInStock' => '150',
                'UnitOnOrder' => '100',
                'ReorderLevel' => '550',
                'Discontinued' => '0',
            ],[
                'ProductName' => 'Kertas Continous Form 2 Ply/2 NCR',
                'SupplierID' => '2',
                'CategoryID' => '2',
                'QuantityPerUnit' => '15',
                'UnitPrice' => '175000',
                'UnitInStock' => '150',
                'UnitOnOrder' => '100',
                'ReorderLevel' => '470',
                'Discontinued' => '2',
            ],[
                'ProductName' => 'Plastik HDPE Geomembrane 500 micron 6Mx1M',
                'SupplierID' => '3',
                'CategoryID' => '3',
                'QuantityPerUnit' => '40',
                'UnitPrice' => '16500',
                'UnitInStock' => '100',
                'UnitOnOrder' => '75',
                'ReorderLevel' => '250',
                'Discontinued' => '1',
            ],[
                'ProductName' => 'Plastik PS Bening',
                'SupplierID' => '3',
                'CategoryID' => '3',
                'QuantityPerUnit' => '30',
                'UnitPrice' => '245000',
                'UnitInStock' => '150',
                'UnitOnOrder' => '50',
                'ReorderLevel' => '650',
                'Discontinued' => '0',
            ],[
                'ProductName' => 'Semen Putih',
                'SupplierID' => '4',
                'CategoryID' => '3',
                'QuantityPerUnit' => '40',
                'UnitPrice' => '50000',
                'UnitInStock' => '50',
                'UnitOnOrder' => '50',
                'ReorderLevel' => '150',
                'Discontinued' => '3',
            ],[
                'ProductName' => 'Panel Beton Pracetak',
                'SupplierID' => '4',
                'CategoryID' => '3',
                'QuantityPerUnit' => '0.525',
                'UnitPrice' => '386000',
                'UnitInStock' => '300',
                'UnitOnOrder' => '20',
                'ReorderLevel' => '150',
                'Discontinued' => '1',
            ],[
                'ProductName' => 'Serat Wol Merino Spanyol ',
                'SupplierID' => '5',
                'CategoryID' => '1',
                'QuantityPerUnit' => '50',
                'UnitPrice' => '250000',
                'UnitInStock' => '50',
                'UnitOnOrder' => '50',
                'ReorderLevel' => '150',
                'Discontinued' => '3',
            ],[
                'ProductName' => 'Serat Wol Down',
                'SupplierID' => '5',
                'CategoryID' => '1',
                'QuantityPerUnit' => '55',
                'UnitPrice' => '350000',
                'UnitInStock' => '70',
                'UnitOnOrder' => '60',
                'ReorderLevel' => '480',
                'Discontinued' => '0',
            ],
        ];

        foreach($productData as $key => $val){
            Products::create($val);
        }
    }
}
