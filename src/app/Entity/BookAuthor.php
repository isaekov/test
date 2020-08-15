<?php


namespace App\Entity;


use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    protected $fillable = [
        "book_id",
        "author_id"
    ];
}
