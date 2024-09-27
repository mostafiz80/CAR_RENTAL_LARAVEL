<?php

namespace Database\Factories;
use App\Models\Vehicle;
use Faker\Provider\FakeCar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new FakeCar($this->faker));
        $vehicle = $this->faker->vehicleArray();
        return [
            'name' => $this->faker->vehicle,
            'brand' =>  $vehicle['brand'],
            'model' => $vehicle['model'],
            'year' => $this->faker->biasedNumberBetween(1990, date('Y'), 'sqrt'),
            'car_type' => str_replace(' ', '_', $this->faker->vehicleType),
            'daily_rent_price' => rand(100, 1000),
            'availability' => fake()->boolean(),
            'image' => $this->faker->imageUrl(1920, 1080, true, true),
        ];
    }
}
