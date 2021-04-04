<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*$table->string('name'); */
class City extends Model
{  protected $fillable = [
    'name',
  
                ];
    use HasFactory;
    public function agencies(){
        return $this->hasMany('App\Models\Agency');
        
        }
}
