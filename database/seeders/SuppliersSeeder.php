<?php

namespace Database\Seeders;

use App\Models\SupplierModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supplierData =[
            [
                'CompanyName' => 'Saturnice',
                'ContactName' => 'Mrs. Griska',
                'ContactTitle' => 'Supplier Kain Gresik',
                'Address' => 'Jl. Anggrek',
                'City' => 'Kabupaten Gresik',
                'Region' => 'Jawa Timur',
                'PostalCode' => '61171'
            ],[
                'CompanyName' => 'PT. Leaves',
                'ContactName' => 'Mr. Anthony',
                'ContactTitle' => 'Supplier Kertas',
                'Address' => 'Jl. Jasmine',
                'City' => 'Kota Surabaya',
                'Region' => 'Jawa Timur',
                'PostalCode' => '60121'
            ],[
                'CompanyName' => 'PT. Warna Warni',
                'ContactName' => 'Mr. Aan',
                'ContactTitle' => 'Supplier Plastik',
                'Address' => 'Jl. Kenanga',
                'City' => 'Kota Solo',
                'Region' => 'Jawa Tengah',
                'PostalCode' => '62217'
            ],[
                'CompanyName' => 'Bumisejahtera Group',
                'ContactName' => 'Mr. Samuel',
                'ContactTitle' => 'Supplier Kebutuhan Konstruksi',
                'Address' => 'Jl. Daisy',
                'City' => 'Kota Jakarta',
                'Region' => 'Jawa Barat',
                'PostalCode' => '67023'
            ],[
                'CompanyName' => 'Key Group',
                'ContactName' => 'Mrs. Tina',
                'ContactTitle' => 'Supplier Serat Wol',
                'Address' => 'Jl. Pasir',
                'City' => 'Kota Bandung',
                'Region' => 'Jawa Barat',
                'PostalCode' => '61111'
            ],
        ];

        foreach($supplierData as $key => $val){
            SupplierModel::create($val);
        }
    }
}
