<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,100) as $index) {
            DB::table('contacts')->insert([
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName ,
            'email' => $faker->email,
            'job_title' => $faker->jobTitle,
            'city' => $faker->city,
            'country' => $faker->country,
            ]);
        }
    }
}
