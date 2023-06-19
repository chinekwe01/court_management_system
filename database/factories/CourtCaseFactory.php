<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
            'suit_no' => Str::random(8),
            'type' => $this->faker->word(2, true),
            'details' => $this->faker->sentences(3, true),
            'begins'=>$date,
		    'ends'=>$date
        ];
    }
}
