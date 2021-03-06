<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liric extends Model
{
    use HasFactory;
    // Tuches
    protected $touches = ['band', 'album'];

    // Route Key Name
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Eger Loading
    protected $with = ['band', 'album'];
    
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    // Relation many to one (Album)
    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    // Relation many to one (Band)
    public function band()
    {
        return $this->belongsTo(Band::class);
    }
}
