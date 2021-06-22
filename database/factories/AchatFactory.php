<?php

namespace Database\Factories;

use App\Models\Achat;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AchatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Achat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    /* $table->increments('id');
               
                $table->unsignedBigInteger('users_id');
                $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
                $table->string('maison_achat');
                $table->bigInteger('prix');
                $table->bigInteger('avance_cache');
                $table->dateTime('date_achat');
              //  $table->dateTime('date_premier_traite');
                $table->bigInteger('rest');
                $table->bigInteger('rest_mois');
                $table->timestamps(); */
    public function definition()
    {   $prix=$this->faker->randomNumber(2);
        $avence=$prix*1000000/$this->faker->randomNumber(2);
        return [
           'maison_achat'=>$this->faker->name(),
           'prix'=>$prix,
           'avance_cache'=>  $avence,
           'date_achat'=>$this->faker->date(),
          // 'date_premier_traite'=> Carbon::createFromFormat("Y-m-d",$date)->addMonth(),
           'rest'=>$prix-$avence, 
           'rest_mois'=>$this->faker->randomNumber(1), 
           'users_id'=> User::first(),

            
        ];
     }
    }

