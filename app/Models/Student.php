<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public function student(){
        return $this->hasMany(Enroll::class,'student_id');
        return $this->hasMany(Revision::class,'revision_id');
    }


    protected $fillable = [
        'username','name','password','phone_number','address','email','image_id','gender_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];



}
