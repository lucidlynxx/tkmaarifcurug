<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'slug' => fake()->slug(),
            'alamat' => fake()->streetAddress(),
            'noTelepon' => fake()->unique()->phoneNumber(),
            'jenisKelamin' => collect(fake()->randomElements(['laki-laki', 'perempuan'], 1))->implode(''),
        ];
    }
}
