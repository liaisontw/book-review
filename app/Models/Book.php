<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function reivews()
    {
        $this->hasMany(Review::class);
    }
}
