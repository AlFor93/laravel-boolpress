<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Post::class , 30)->make()
          ->each(function($post) {
            $author = App\Author:: inRandomOrder()->first();
            $post->author()->associate($author);
            $post->save();
            $category = App\Category::inRandomOrder()->take(rand(1,3))->get();
            $post->categories()->attach($category);
          });

    }
}
