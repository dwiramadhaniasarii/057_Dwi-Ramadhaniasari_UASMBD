<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for ($i = 1; $i <= 3; $i++) {
            DB::table('Categories')->insert([
                'CategoryName' => $faker->sentence(1),
                'Description' => $faker->text(50),
                'Picture' => $faker->imageUrl(640, 480, 'products', true),
            ]);
        }
    }
}
