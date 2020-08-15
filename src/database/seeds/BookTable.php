<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTable extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Чужак', "description" => "Текст", "price" => 123.1],
            ['name' => 'Свой', "description" => "Текст", "price" => 1233.1],
            ['name' => 'Не свой', "description" => "Текст", "price" => 1343.1],
            ['name' => 'Еще один', "description" => "Текст", "price" => 2442.1],

        ];
        DB::table('books')
            ->insert($data);
    }
}
