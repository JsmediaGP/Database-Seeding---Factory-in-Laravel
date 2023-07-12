<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DemoaccFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // $table->id();
            // $table->bigInteger('acc_no');
            // $table->string('acc_type');
            // $table->string('name');
            // $table->string('email');
            // $table->string('address');
            // $table->string('phone');
            // $table->bigInteger('balance');
            //$table->string('password');
            // $table->timestamps();
            'acc_no' => fake()->randomDigit(),
            'acc_type' => 'savings, current',
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->city(),
            'phone'=>fake()->mobile(),
            'balance'=>fake()->random_int(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //'remember_token' => Str::random(10),
        ];
    }
}
