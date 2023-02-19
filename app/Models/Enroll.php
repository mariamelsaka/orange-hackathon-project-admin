<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
