<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*   $table->id();
            $table->string('name');
            $table->string('address');
            $table->unsignedBigInteger('cities_id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('cities_id')->references('id')->on('cities'); */
         
class Agency extends Model
{use HasFactory;
    protected $fillable = [
        'name',
        'address',
                    ];
    
    //return $this->hasOne('App\Models\Profile');
public function city(){
return $this->belongsTo('App\Models\City','cities_id');

}
public function user(){
    return $this->belongsTo('App\Models\User','users_id');
    
    }
    public function cars(){
        return $this->hasMany('App\Models\Car');
        
        }
}
