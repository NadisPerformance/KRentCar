<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
   /* $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('users_id');        
            $table->foreign('users_id')->references('id')->on('users');
 */
    public function definition()
    {
        $date=now();
        
        return [
         
        'start_date' => $date->addDays($this->faker->randomNumber(1)),
        'end_date' => $date->addDays($this->faker->randomNumber(2)),
        'users_id'=> User::first(),

        ];
    }
}
