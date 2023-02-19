<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Course extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public function course(){
        return $this->hasMany(Teach::class,'teach_id');
        return $this->hasMany(Exam::class,'exam_id');

    }

    protected $fillable = [
        'course_name','course_level','category_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
