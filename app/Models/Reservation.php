<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/* $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('users_id');        
            $table->foreign('users_id')->references('id')->on('users');
 */
class Reservation extends Model
{protected $fillable = [
    'start_date','end_date'
  
                ];
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User','users_id');
        
        }
      public function cars(){
        return $this->hasMany('App\Models\Car');
        
        }
}
