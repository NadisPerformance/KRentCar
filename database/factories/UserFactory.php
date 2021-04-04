<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data= [
            'firstname' => $this->faker->firstname,
            'lastname' => $this->faker->lastname,
           'gender'=> $this->faker->boolean() ? 'homme' : 'femme',
            'address' => $this->faker->address,
            'phone'=>$this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'admin'=>false,
            'is_active'=>false,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
         
        ];
    
        return $data;
      
    }
public function admin(){
return $this->state(['admin'=>true]);

}
public function active(){
    return $this->state(['is_active'=>true]);
    
    }
    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\FactoryApp\Models\User::factory()
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
