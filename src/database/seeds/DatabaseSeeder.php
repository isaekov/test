<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
         $this->call(BookTable::class);
         $this->call(AuthorTable::class);
         $this->call(AuthorBookTable::class);
         $this->call(UserTable::class);
    }
}
