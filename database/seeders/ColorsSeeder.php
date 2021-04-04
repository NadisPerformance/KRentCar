<?php

namespace Database\Seeders;

use App\Models\Color;

use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $colors = array
        ('Bleu',

        'Blanc',

        'Gris',

        'Jaune',

        'Marron', 

        'Noir' ,
       
        'Orange' ,
       
        'Rose' ,
       
        'Rouge' ,
       
        'Vert' ,
       
        'Violet' );
         /*
            $table->string('name'); */
        foreach( $colors as $element)
{
    Color::create(['name' => $element]);
   
}
    }
}
