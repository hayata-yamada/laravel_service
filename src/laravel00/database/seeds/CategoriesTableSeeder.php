<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['categories_name' => 'book'],
            ['categories_name' => 'cafe'],
            ['categories_name' => 'travel']
        ]);
    }
}

