<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorBookTable extends Seeder
{
    public function run()
    {
        $data = [
            ['book_id' => 19, 'author_id' => 1],
            ['book_id' => 20, 'author_id' => 1],
            ['book_id' => 21, 'author_id' => 2],
            ['book_id' => 22, 'author_id' => 3],
            ['book_id' => 23, 'author_id' => 3],
            ['book_id' => 24, 'author_id' => 9],
            ['book_id' => 25, 'author_id' => 9],
            ['book_id' => 26, 'author_id' => 9],
            ['book_id' => 27, 'author_id' => 9],
            ['book_id' => 22, 'author_id' => 1]
        ];

        DB::table('book_authors')
            ->insert($data);
    }
}
