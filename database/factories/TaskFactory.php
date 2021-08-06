<?php

namespace Database\Factories;

use App\Models\Seller;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'description' => $this->faker->realText(100),
            'max_date_execution'=>$this->faker->dateTimeBetween('-1 months', '+1 months'),
            'user_assigned_id'=>2,
            'user_id'=>1
        ];
    }

}
