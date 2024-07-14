<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('test')->insert([
                'title' => $faker->sentence,
                'num' => $faker->numberBetween(1, 100)
            ]);
        }
    }
}