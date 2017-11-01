<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $filePath = storage_path('images');


        $faker = Faker\Factory::create();
        DB::table('users')->insert([
            'name' => 'Viacheslav',
            'lastname' => '',
            'nickname' => 'admin',
            'city' => 'Odessa',
            'country' => 'Ukraine',
            'avatar' => $faker->image($filePath, 200, 200, null, false),
            'email' => 'vm.php.dev@gmail.com',
            'password' => bcrypt('123456'),
            'isAdmin' => 1,
            'isActive' => 1,
            'created_at' => $faker->dateTimeBetween('-3 months', 'now'),
            'updated_at' => $faker->dateTimeBetween('-1 hours', 'now'),
        ]);
        foreach (range(1,20) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'nickname' => $faker->userName,
                'city' => $faker->city,
                'country' => $faker->country,
                'avatar' => $faker->image($filePath, 200, 200, null, false),
                'email' => $faker->safeEmail,
                'password' => bcrypt('123456'),
                'isAdmin' => 0,
                'isActive' => 1,
                'created_at' => $faker->dateTimeBetween('-3 months', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 hours', 'now'),
            ]);
        }
    }
}
