<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Seeding;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeedingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Factory::create();

        for($i=0;$i<50;$i++){
            Seeding::create([
                "name" => $faker->name(),
                "address" => $faker->address(),
                "email" => $faker->email(),
                "contact" => $faker->phoneNumber(),
            ]);
        }
    }
}
