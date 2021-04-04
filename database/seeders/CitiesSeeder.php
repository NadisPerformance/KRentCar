<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = array
       ( 'Casablanca',
'Fés',
'Tanger',
'Marrakech',
'Salé',
'Meknès',
'Rabat',
'Oujda',
'Kénitra',
'Agadir',
'Tétouan',
'Témara',
'Safi',
'Mohammédia',
'Khouribga',
'El Jadida',
'Béni Mellal',
'Nador',
'Taza',
'Khémisset');

         /*
            $table->string('name'); */
        foreach( $cities as $element)
{
    City::create(['name' => $element]);
   
}
    }
}
