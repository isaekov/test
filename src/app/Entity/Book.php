<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
        "name",
        "description",
        "price",
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class, BookAuthor::class);
    }
}
