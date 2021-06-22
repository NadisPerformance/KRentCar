<?php

namespace Database\Factories;

use App\Models\Visite_technique;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class Visite_techniqueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visite_technique::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    /* $table->increments('id');
           
            $table->string('centre');
           // $table->unsignedBigInteger('id_controle');
          //$table->bigInteger('n_autorisation');
            $table->dateTime('date_visite');
            $table->dateTime('date_fin');
            $table->bigInteger('prix');
           // $table->string('duree_mois');
           // $table->string('contact_center');
            $table->string('observation')->nullable();;
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
     */
    public function definition()
    {
        $date_visite=$this->faker->date();
        return [
           'centre'=>$this->faker->name(),
           'date_visite'=>$date_visite,
           'date_fin'=> Carbon::createFromFormat("Y-m-d",$date_visite)->addYear(),
           'prix'=>$this->faker->randomNumber(4), 
            
                  
          

        ];
    }
}
