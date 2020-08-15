<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $fillable = [
        "name",
        "last_name"
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, BookAuthor::class);
    }
}
