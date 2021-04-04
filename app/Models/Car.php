<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*  $table->id();
            $table->string('plate_number');
            $table->string('picture');
            $table->unsignedBigInteger('model');
            $table->unsignedBigInteger('model_date');
            $table->unsignedDouble('price');
            $table->string('chassis_number');
            $table->string('automatique')->default(false);
            $table->string('statut');
            $table->unsignedBigInteger('brands_id');
            $table->unsignedBigInteger('agencies_id');
            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('colors_id');
            $table->unsignedBigInteger('locations_id');
            $table->unsignedBigInteger('reservations_id'); */
class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'plate_number','picture',
        'model','automatique','statut',
        'model_date','price', 'chassis_number' ,
    ];
    public function brand(){
        return $this->belongsTo('App\Models\Brand', 'brands_id');
        
        }
        public function agency(){
            return $this->belongsTo('App\Models\Agency','agencies_id');
            
            }
        public function category(){
            return $this->belongsTo('App\Models\Category','categories_id');
            
            }
            public function color(){
                return $this->belongsTo('App\Models\Color','colors_id');
                
                }
               
     
                        
                        public function reservation(){
                            return $this->belongsTo('App\Models\reservation','reservations_id');
                            
                            }
                            public function location(){
                                return $this->belongsTo('App\Models\location','locations_id');
                                
                                }
}
