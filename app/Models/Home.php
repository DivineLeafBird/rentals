<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function imageshomes()
    {
        return $this->hasMany(Imageshome::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
