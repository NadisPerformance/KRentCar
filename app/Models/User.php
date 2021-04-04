<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*    $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('is_active');
            $table->string('admin');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
 */
class User extends Model
{protected $fillable = [
    'firstname','lastname','gender','phone','is_active','address','admin','email','password'
  
                ];
    use HasFactory;
    public function reservation(){
        return $this->hasMany('App\Models\Reservation');
        
        }
      public function location(){
        return $this->hasMany('App\Models\Location');
        
        }
        public function agency(){
            return $this->hasMany('App\Models\Agency');
            
            }
    }
