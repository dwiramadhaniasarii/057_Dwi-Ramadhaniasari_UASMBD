<?php

namespace Database\Seeders;

use App\Models\Shippers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShippersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shipperData =[
            [
                'CompanyName' => 'J&T Group',
                'Phone' => '02180661888'
            ],[
                'CompanyName' => 'PT. Tiki Jalur Nugraha Ekakurir',
                'Phone' => '02180661888'
            ],
        ];

        foreach($shipperData as $key => $val){
            Shippers::create($val);
        }
    }
}
