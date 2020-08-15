<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorTable extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Артур', "last_name" => "Конандоил"],
            ['name' => 'Вальтер', "last_name" => "Скотт"],
            ['name' => 'Стенли', "last_name" => "Милгрэм"],
            ['name' => 'Ильдар1', "last_name" => "Исаеков"],
        ];
        DB::table('authors')
            ->insert($data);
    }
}
