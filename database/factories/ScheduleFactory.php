<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Schedule;
use App\Models\Worker;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'manager_id' => Worker::factory(),
            'date' => $this->faker->date(),
        ];
    }
}
