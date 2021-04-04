<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call(class:BrandsSeeder::class);
       $this->call(class:CategoriesSeeder::class);
        $this->call(class:CitiesSeeder::class);
        $this->call(class:ColorsSeeder::class);
        $this->call(class:UsersSeeder::class);
        $this->call(class:LocationsSeeder::class);
        $this->call(class:ReservationsSeeder::class);
        $this->call(class:AgenciesSeeder::class);
        $this->call(class:CarsSeeder::class);
    }
}
