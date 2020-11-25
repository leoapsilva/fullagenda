<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default sta
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'lastname' => $this->faker->lastName,
            'phone' => $this->faker->phoneNumber, 
            'mobile' => $this->faker->e164PhoneNumber,
            'specialty' => $this->faker->randomElement(['Cardio', 'Oftalmo', 'Endocrino', 'Reumato', 'Ortopedista']),
            ];
       }
}
