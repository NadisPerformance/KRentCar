<?php

namespace Database\Factories;

use App\Models\Agency;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use App\Models\Color;
use App\Models\Location;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;


class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /* $table->id();
            $table->string('plate_number');
            $table->string('picture');
            $table->string('model');
            $table->unsignedBigInteger('model_date');
            $table->unsignedDouble('price');
            $table->string('chassis_number');
            $table->string('technical_cotrols');
            $table->unsignedBigInteger('brands_id');
            $table->unsignedBigInteger('agencies_id');
            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('colors_id');
          
            $table->unsignedBigInteger('locations_id');    
            $table->unsignedBigInteger('reservations_id');  */
        return [
            'plate_number' => $this->faker->randomNumber(5).'-أ-'. $this->faker->randomNumber(2),
            'picture' => $this->faker->image(),
            'model_date' => $this->faker->date(),
            'model' => $this->faker->randomNumber(3),
            'price'=>  $this->faker->randomNumber(5),
            'chassis_number' => $this->faker->randomNumber(5),
            'automatique'=>false,
            'statut'=> 'disponible',
              'brands_id'=> Brand::first(),
              'agencies_id'=> Agency::first(),
              'categories_id'=> Category::first(),
              'colors_id'=> Color::first(),
              'locations_id'=> Location::first(),
              'reservations_id'=> Reservation::first()
          
           
        ];
    }
    public function statut(){
        return $this->state(['statut'=>'indisponible']);
        
        }
        public function automatique(){
            return $this->state(['automatique'=>true]);
            
            }
    }
