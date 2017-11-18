<?php

use App\Category;
use Illuminate\Database\Seeder;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        Category::truncate();
        
        $data = [];
        
        for($i = 1; $i <= 20 ; $i++) {
            $word = $faker->unique()->word;
            array_push($data, [
                'name'  => $word,
                'slug'  => str_slug($word),
                'photo' => 'https://picsum.photos/1600/600/?random',
            ]);
        }
        
        Category::insert($data);
    }
}
