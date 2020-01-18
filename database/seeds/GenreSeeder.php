<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->truncate();

        DB::table('genres')->insert([
            ['id' => 1, 'name' => 'Fantasy', 'description' => 'Fantasy is a genre of speculative fiction set in a fictional universe, often inspired by real world myth and folklore'],
            ['id' => 2, 'name' => 'Romance', 'description' => 'Although the genre is very old, the romance novel or romantic novel discussed in this article is the mass-market version. '],
            ['id' => 3, 'name' => 'Mystery', 'description' => 'Mystery fiction is a genre of fiction usually involving a mysterious death or a crime to be solved.']
        ]);
    }
}
