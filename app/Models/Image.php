<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function admin(){
        return $this->hasMany(Admin::class,'admin_id');
        return $this->hasMany(Admin::class,'student_id');
        return $this->hasMany(Admin::class,'trainer_id');
        
    }
}
