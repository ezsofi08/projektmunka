<?php

namespace Database\Factories;

use App\Models\Doctors;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Comment\Doc;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'doctor_id' => Doctors::all()->random(1)->first()->id,
            'user_id' => Doctors::all()->random(1)->first()->id,
            'end_at' => fake()->dateTimeBetween('2022-11-29','2022-12-31')
        ];
    }
}
