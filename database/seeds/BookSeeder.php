<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();


        DB::table('books')->insert([
            ['id' => 1,'genre_id'=> 1,'name' => 'Harry Potter I', 'description' => 'Super kniha o Poterovi, 1. diel', 'pages' => 350, 'year' => 2004, 'created_at' => now()],
            ['id' => 2,'genre_id'=> 2,'name' => 'Harry Potter II', 'description' => 'Super kniha o Poterovi, 2. diel', 'pages' => 347, 'year' => 2005,'created_at' => now()],
            ['id' => 3,'genre_id'=> 1,'name' => 'Harry Potter III', 'description' => 'Super kniha o Poterovi, 3. diel', 'pages' => 421, 'year' => 2006, 'created_at' => now()],
            ['id' => 4,'genre_id'=> 3,'name' => 'Pan Prstenov', 'description' => 'Dobra kniha ...', 'pages' => 449, 'year' => 1890, 'created_at' => now()]
        ]);
    }
}
