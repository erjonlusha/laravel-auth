<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->sentence(4);
            $newPost->body = $faker->text(400);
            $newPost->slug = Str::slug($newPost->title);
            $newPost->save();
        }
    }
}
