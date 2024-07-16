<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Company::factory(5)->create()->each(function ($company) {
            // Create 3 branches for each company
            $branches = Branch::factory(3)->create(['company_id' => $company->id]);
        
            // For each branch, create 20 employees
            $branches->each(function ($branch) {
                Employee::factory(20)->create(['branch_id' => $branch->id]);
            });
        });
        

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
