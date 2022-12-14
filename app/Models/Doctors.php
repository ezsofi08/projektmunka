<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "password",
        "email",
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class,'doctor_id','id');
    }
}
