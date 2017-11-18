<?php

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class comments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        Comment::truncate();
        
        $users = User::visitors()->pluck('id')->toArray();
        $posts = Post::pluck('id')->toArray();

        $data = [];
        
        for($i = 1; $i <= 10000 ; $i++) {
            array_push($data, [
                'user_id' => $faker->randomElement($users),
                'post_id' => $faker->randomElement($posts),
                'comment' => $faker->realText(150),
            ]);
        }
        
        Comment::insert($data);
    }
}
