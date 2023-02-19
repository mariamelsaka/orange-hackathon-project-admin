<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Revision extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public static function where(string $string, mixed $student_degree)
    {
    }

    public function exam(){
        return $this->belongsTo(Exam::class,'exam_id');
    }

    protected $fillable = [
        'student_degree',
        'total_right_degree',
        'total_wrong_degree',
        'student_id',
        'exam_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
