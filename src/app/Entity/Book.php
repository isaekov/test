<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{


    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
