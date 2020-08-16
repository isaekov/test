<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTable extends Seeder
{
    public function run()
    {
        $data = [
            ['id' => 19, 'name' => 'Этюд в багровых тонах', "description" => "Описание", "price" => 123.1],
            ['id' => 20, 'name' => 'Собака Баскервилей', "description" => "Описание", "price" => 123.1],
            ['id' => 21, 'name' => 'Айвенго,', "description" => "Описание", "price" => 123.1],
            ['id' => 22, 'name' => 'Obedience to Authority: An Experimental View', "description" => "Описание", "price" => 123.1],
            ['id' => 23, 'name' => 'The Individual in a Social World: Essays and Experiments', "description" => "Описание", "price" => 123.1],
            ['id' => 24, 'name' => 'Гамлет', "description" => "Описание", "price" => 123.1],
            ['id' => 25, 'name' => 'Ромео и Джульетта', "description" => "Описание", "price" => 123.1],
            ['id' => 26, 'name' => 'Макбет', "description" => "Описание", "price" => 123.1],
            ['id' => 27, 'name' => 'Сон в летнюю ночь', "description" => "Описание", "price" => 123.1],



        ];
        DB::table('books')
            ->insert($data);
    }
}
