<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {
            DB::table('Employees')->insert([
                'LastName' => $faker->lastName,
                'FirstName' => $faker->firstName,
                'Title' => $faker->title . $faker->name,
                'TitleOfCourtesy' => $faker->title ,
                'BirthDate' => $faker->dateTimeBetween($startDate = '-55 years', $endDate = '-19 years'),
                'HireDate' => $faker->dateTimeBetween($startDate = '-36 years', $endDate = 'now'),
                'Address' => $faker->address,
                'City' => $faker->city,
                'Region' => $faker->state,
            ]);
        }
    }
}
