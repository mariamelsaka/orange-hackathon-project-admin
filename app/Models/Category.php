<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function course(){
        return $this->hasMany(Course::class,'course_id');
        
    }

    protected $table='categories';
    protected $fillable = [
       'category_name','created_at','updated_at'
        
    ];
}
