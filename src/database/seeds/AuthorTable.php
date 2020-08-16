<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorTable extends Seeder
{
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Артур', "last_name" => "Конан Дойль"],
            ['id' => 2, 'name' => 'Вальтер', "last_name" => "Скотт"],
            ['id' => 3, 'name' => 'Стенли', "last_name" => "Милгрэм"],
            ['id' => 9, 'name' => 'Уильям', "last_name" => "Шекспир"],
        ];
        DB::table('authors')
            ->insert($data);
    }
}
