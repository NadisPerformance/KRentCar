<?php

namespace Database\Factories;

use App\Models\Assurance;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssuranceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Assurance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    /* $table->increments('id');
                $table->string('assurance');
               // $table->string('num_police');
                $table->dateTime('date_debut');
                $table->dateTime('date_fin');
              //  $table->integer('duree_mois');
                $table->integer('prix');
               //q $table->string('contact_assurance');
                $table->string('observation')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->timestamp('created_at')->nullable(); */
    public function definition()
    {
        $date_visite=$this->faker->date();
        return [
           'assurance'=>'TousRisques',
           'date_debut'=>$date_visite,
           'date_fin'=> Carbon::createFromFormat("Y-m-d",$date_visite)->addYear(),
           'prix'=>$this->faker->randomNumber(4), 
            
        ];
     }
}
