<?php

namespace Database\Factories;

use App\Models\Agency;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgencyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agency::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    /*    $table->id();
            $table->string('name');
            $table->string('address');
            $table->unsignedBigInteger('cities_id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('cities_id')->references('id')->on('cities'); */
    public function definition()
    {
        return [
           'name'=>$this->faker->name(),
           'address'=>$this->faker->address,
           'cities_id'=> User::first(),
           'users_id'=> User::first(),
          

        ];
    }
}
