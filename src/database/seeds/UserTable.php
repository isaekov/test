<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTable extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => "admin", 'email' => "hello@world.ru", 'password' => '$2y$10$0ZqYk3hKhe2PFKogufrEt.uDQxWwia36/wH7jsX/12Ww4kV3WlzaC'],
        ];

        DB::table('users')
            ->insert($data);
    }
}
