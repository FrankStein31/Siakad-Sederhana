<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'alamat' => fake()->address(),
            'no_telp' => fake()->phoneNumber(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
        ];
    }
}
