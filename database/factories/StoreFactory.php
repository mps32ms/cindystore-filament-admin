<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Story>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $store = $this->faker->words(2, true);
        return [
            'tenant_id' => 1,
            'name' => $store,
            'phone' => $this->faker->phoneNumber(),
            'about' => $this->faker->paragraphs(2, true),
            'slug' => str()->of($store)->slug(),
        ];
    }
}
