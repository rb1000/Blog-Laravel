<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('posts')->insert(['title' => 'First post','Slug' => 'First_post','user_id' => 1,'text' =>$faker->text]);
        DB::table('posts')->insert(['title' => 'Second post','Slug' => 'Second_post','user_id' => 1,'text' =>$faker->text]);
        DB::table('posts')->insert(['title' => 'Thirth post','Slug' => 'Thirth_post','user_id' => 1,'text' =>$faker->text]);
    }
}
