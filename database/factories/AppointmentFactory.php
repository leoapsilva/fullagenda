<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'appointed_to' => $this->faker->dateTimeBetween('1 month', '4 months'), 
            'patient_id' => $this->faker->randomElement(DB::table('patients')->select('id')->get())->id,
            'doctor_id' => $this->faker->randomElement(DB::table('doctors')->select('id')->get())->id,
            'user_id' => $this->faker->randomElement(DB::table('users')->select('id')->get())->id,
        ];
    }
}
