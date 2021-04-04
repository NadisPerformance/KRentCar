<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = array
       ( 'Acura',
        'Alfa' ,
        'Audi' ,
        'BMW'  ,
        'Bentley' ,
        'Buick'  ,
        'Cadillac',
        'Chevrolet',
        'Chrysler' ,
        'Dodge'  ,
        'Fiat' ,
        'Ford' ,
        'GMC' ,
        'Genesis',
        'Honda'  ,
        'Hyundai',
        'Infiniti',
        'Jaguar'  ,
        'Jeep'  ,
        'Kia'  ,
        'Land' ,
        'Lexus',
        'Lincoln',
        'Lotus'  ,
        'Maserati' ,
        'Mazda'  ,
        'Mercedes-Benz',
        'Mercury' ,
        'Mini'  ,
        'Mitsubishi',
        'Nikola'  ,
        'Nissan',
        'Polestar',
        'Pontiac',
        'Porsche',
        'Ram'  ,
        'Rivian',
        'Rolls-Royce',
        'Saab'  ,
        'Saturn',
        'Scion' ,
        'Smart'  ,
        'Subaru' ,
        'Suzuki' ,
        'Tesla'  ,
        'Toyota' ,
        'Volkswagen' ,
        'Volvo'  );
 
          /*
             $table->string('name'); */
         foreach( $brands as $element)
 {
     Brand::create(['name' => $element]);
    
 }
    }
}
