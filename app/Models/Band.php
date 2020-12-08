<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    // Get key
    public function getRouteKeyName()
    {
        return 'slug';
    }
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

    // Relation one to many (Liric)
    public function lirics()
    {
        return $this->hasMany(Liric::class);
    }

    // Mutator
    public function getTakeImgAttribute()
    {
        return url('storage', $this->img);
    }
}
