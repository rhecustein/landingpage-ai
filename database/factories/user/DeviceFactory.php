<?php

namespace Database\Factories\user;

use App\Models\Device;
use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DeviceFactory extends Factory
{
    protected $model = Device::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(),
            'phone' => fake()->phoneNumber(),
        ];
    }
}
