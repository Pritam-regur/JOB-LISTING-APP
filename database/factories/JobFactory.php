<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id'=> Employer::factory(),
            'title'=> fake()->jobTitle,
            'salary'=> fake()->randomElement(['$50,000 USD', '$90,000 USD', '$150,000 USD', '$70,000 USD', '$10,000 USD', '$20,000 USD']),
            'location'=> fake()->randomElement(['Remote','Ahmedabad','Bangalore','Pune']),
            'schedule'=> 'Full Time',
            'url' => fake()->url,
            'featured' => false
        ];
    }
}
