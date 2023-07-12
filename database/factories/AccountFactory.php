<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ 
            'acc_no' => fake()->numerify('##########'),
            'acc_type' => 'savings, current',
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->city(),
            'phone'=>fake()->phoneNumber(),
            'balance'=>fake()->numerify('#######'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //'remember_token' => Str::random(10),
        
        ];
    }
}
