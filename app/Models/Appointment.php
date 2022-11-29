<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'end_at'
        ];

    protected function users() {
        return $this->belongsToMany(User::class,'appointments','id','user_id');
    }

    protected function doctors() {
        return $this->belongsToMany(Doctors::class,'appointments','id','doctor_id');
    }

    protected function userId(): Attribute
    {
        /*
         * Based on the value of user_id (integer or null) return an informative string
         * to display.
         * */
        return Attribute::make(
            get: fn ($value) => ($value === null ? 'Available' : 'Reserved')
        );
    }
}
