<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    // Relation many to one (Band)
    public function band()
    {
        return $this->belongsTo(Band::class);
    }
    // Relation one to many (Liric)
    public function lirics()
    {
        return $this->hasMany(Lirics::class);
    }
}
