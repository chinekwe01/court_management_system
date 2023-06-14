<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourtCase>
 */
class CourtCaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1 day' );
        return [
            'type' => $this->faker->word(2, true),
            'details' => $this->faker->sentences(3, true),
            'begins'=>$date,
		    'ends'=>$date
        ];
    }
}
