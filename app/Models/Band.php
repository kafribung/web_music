<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;
    
    // Relation one to many (Album)
    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    // Relation many to many (Genre)
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
