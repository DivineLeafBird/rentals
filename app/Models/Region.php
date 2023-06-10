<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name', 'latitude', 'longitude', 'county_id'];

    public function county()
    {
        return $this->belongsTo(County::class);
    }
}
