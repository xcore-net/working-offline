<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    protected $model = Branch::class;
    public function definition()
    {
        return [
            'name' => $this->faker->city . ' Branch',
            'company_id' => Company::factory(),
        ];
    }
}
