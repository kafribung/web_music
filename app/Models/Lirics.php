<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lirics extends Model
{
    use HasFactory;
    // Relation many to one (Album)
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
