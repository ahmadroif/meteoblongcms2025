<?php



namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MeteoblongFactory extends Factory
{
    public function definition(): array
    {
        $quantity = $this->faker->numberBetween(1, 10);
        return [
            'customer' => $this->faker->name(),
            'product' => $this->faker->word(),
            'quantity' => $quantity,
            'total_price' => $quantity * 50000,
            'order_date' => $this->faker->date()
        ];
    }
}

