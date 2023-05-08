<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'postal_code', 'state_id', 'city_id'
    ];

    protected $dates = ['deleted_at'];

    public function state()
    {
        return $this->hasOne(State::class);
    }

    public function city()
    {
        return $this->hasOne(City::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

//    public function owner()
//    {
//        return $this->hasOne(User::class);
//    }

//    public function animals()
//    {
//        return $this->hasMany(Animal::class);
//    }
}
