<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date=now();
       // dd(User::all()->toArray());
        return [
         
        'start_date' => $date->addDays($this->faker->randomNumber(1)),
          'end_date' => $date->addDays($this->faker->randomNumber(2)),
          'users_id'=> User::first(),

        ];
    }
}
