<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/* $table->string('name'); */
class Category extends Model
{  protected $fillable = [
    'name',
  
                ];
    use HasFactory;
    public function cars(){
        return $this->hasMany('App\Models\Car');
        
        }
}
