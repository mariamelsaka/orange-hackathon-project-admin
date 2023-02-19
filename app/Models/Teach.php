<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teach extends Model
{
    use HasFactory;
    public function trainer(){
        return $this->belongsTo(Trainer::class,'trainer_id');
    }
}
