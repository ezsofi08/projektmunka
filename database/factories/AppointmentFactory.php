<?php

namespace Database\Factories;

use App\Models\Doctors;
use App\Models\User;
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
            // Should generate doctors with role=1, but its a @TODO
            'doctor_id' => User::all()->where('role', '=', 0)->random(1)->first()->id,
            'user_id' => User::all()->where('role','=', 0)->random(1)->first()->id,
            'end_at' => fake()->dateTimeBetween('2022-11-01','2022-12-31')
        ];
    }
}
