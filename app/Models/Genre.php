<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // Relation many to many (Band)
    public function bands()
    {
        return $this->belongsToMany(Band::class);
    }
}
