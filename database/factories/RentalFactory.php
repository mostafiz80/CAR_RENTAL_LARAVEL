<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $car = Car::inRandomOrder()->first();
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'car_id' => $car->id,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addDays(7),
            'total_cost' => $car->daily_rent_price,
        ];
    }
}
