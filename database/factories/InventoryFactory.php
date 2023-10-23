<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'InventoryName' => $this->faker->name,
            'InventoryDescription' => $this->faker->name,
            'InventoryLocation' => $this->faker->name,
            'InventoryArchiveDate' => $this->faker->date(),
            'InventoryCategory' => $this->faker->name,
            'InventorySupplier' => $this->faker->name,
            //
        ];
    }
}
