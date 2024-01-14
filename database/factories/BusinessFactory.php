<?php

namespace Database\Factories;

use App\Enums\BusinessTypes;
use App\Enums\PropertyTypes;
use App\Enums\TransactionTypes;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'business_name' => $this->faker->sentence(3),
            'business_number' => "RC".$this->faker->numberBetween(1000, 900000),
            'business_type' => $this->faker->randomElement(BusinessTypes::toArray()),
            'listing_id' => generateUID(),
            'property_type' => $this->faker->randomElement(PropertyTypes::toArray()),
            'category_id' => $this->faker->numberBetween(1, 15),
            'description' => $this->faker->paragraph(6),
            'transaction_type' => $this->faker->randomElement(TransactionTypes::toArray()),
            'address' => 'Online',
            'price' => $this->faker->numberBetween(1000000, 20000000),
            'profit_margin' => $this->faker->numberBetween(15, 100),
            'staffs' => 'None',
            'age' => $this->faker->numberBetween(1, 8),
            'status' => 'approved'
        ];
    }
}
