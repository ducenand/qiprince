<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\Front\Article::trancate();
      factory(\App\Models\Front\Article::class,20)->create();
    }
}
