<?php

namespace Database\Factories;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;

class JiraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $start = $this->faker->time();
        $end =  CarbonImmutable::create($start)->addMinutes($this->faker->numberBetween(5,60))->toTimeString();

        return [
            'date' => $this->faker->date(),
            'start' => $start,
            'end' => $end,
            'sic' => 'SIC-' . $this->faker->numberBetween(0,9999),
            'repository' => $this->faker->company(),
            'title' => $this->faker->text(30),
            'responsible' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'integrator' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'status' => $this->faker->numberBetween(0,6),
            'emergent' => $this->faker->numberBetween(0,1),

        ];
    }
}
