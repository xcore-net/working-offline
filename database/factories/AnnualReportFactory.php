<?php

namespace Database\Factories;


use App\Models\AnnualReport;
use App\Models\Branch;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnualReportFactory extends Factory
{
    protected $model = AnnualReport::class;
    public function reportable()
    {
        return $this->faker->randomElement([Employee::class, Branch::class]);
    }
    public function definition()
    {
        $reportable =$this->reportable();
        return [
            'year' => $this->faker->date,
            'income' => $this->faker->numberBetween(400000, 1200000),
            'expenses' => $this->faker->numberBetween(200000, 1000000),
            
            'reportable_id'=>$reportable::factory()->create(),
            'reportable_type'=>$reportable,
        ];
    }
}


