<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Weight_Log;

class Weight_LogFactory extends Factory
{
    protected $model = Weight_Log::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,5),
            'date' => $this->faker->dateTime('Y/m/d H:i:s'),
            'weight' => $this->faker->randomFloat(1,50,80),
            'calories' => $this->faker->numberBetween(1500,2800),
            'exercise_time' => $this->faker->time('H:i'),
            'exercise_content' => $this->faker->realText(120),
        ];
    }
}
