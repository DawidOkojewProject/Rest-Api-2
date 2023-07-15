<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class people_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 200; $i++) {
            DB::table('people')->insert([
                'firstName' => $faker->firstName,
                'surname' => $faker->lastName,
                'email' =>$faker->freeEmail,
                'phone-number' => $faker->phoneNumber,
                'street' => $faker->streetName,
                'city' => $faker->city,
            ]);
        }
    }
}
