<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array('Berline','coupé','familiale','Cabriolet','Roadster','Ramasser','4×4','Multisegments','Mini-fourgonnette','sportive');

        
        
        foreach( $categories as $element)
{
    Category::create(['name' => $element]);
   
}
    }
}
