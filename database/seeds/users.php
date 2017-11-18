<?php

use App\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        User::truncate();
        
        $data = [];
        
        for($i = 1; $i <= 10 ; $i++) {
            array_push($data, [
                'name'     => $faker->unique()->name,
                'email'    => $faker->unique()->email,
                'password' => bcrypt('123456'),
                'avatar'   => 'https://randomuser.me/api/portraits/' . $faker->randomElement(['women', 'men']) . '/' . $faker->numberBetween(1, 99) . '.jpg',
                'role'     => 10, // Authors
            ]);
        }
        
        for($i = 1; $i <= 10 ; $i++) {
            array_push($data, [
                'name'     => $faker->unique()->name,
                'email'    => $faker->unique()->email,
                'password' => bcrypt('123456'),
                'avatar'   => 'https://randomuser.me/api/portraits/' . $faker->randomElement(['women', 'men']) . '/' . $faker->numberBetween(1, 99) . '.jpg',
                'role'     => 0, // Authors
            ]);
        }
        
        User::insert($data);
    }
}
