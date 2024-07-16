<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Branch;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;
    public function addressable()
    {
        return $this->faker->randomElement([Employee::class, Branch::class]);
    }
    public function definition()
    {
        $addressable =$this->addressable();
        return [
            'city' => $this->faker->city,
            'postcode' => $this->faker->postcode,
            'addressable_id'=>$addressable::factory()->create(),
            'addressable_type'=>$addressable,
        ];
    }
    
}


