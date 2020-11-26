<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'lastname' => $this->faker->lastName. ' '.$this->faker->lastName,
            'mobile' => $this->faker->phoneNumber,
            'health_insurance_plan' => $this->faker->randomElement(['Unimed', 'Austa', 'HB Saúde', 'Bensaúde', 'Bradesco Saúde']),
            'birthday'=> $this->faker->dateTimeBetween('-70 years', '-10 years')->format('Y-m-d'),
        ];
    }
}
