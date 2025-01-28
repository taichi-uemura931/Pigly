<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Weight_Target;
use App\Models\User;

class Weight_TargetsFactory extends Factory
{
    protected $model = Weight_Targets::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,5),
            'target_weight' => $this->faker->randomFloat(1,50,80),
        ];
    }
}
