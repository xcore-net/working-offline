<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class RoleFactory extends Factory
{
    protected $model = RoleFactory::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
