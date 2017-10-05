<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,300) as $index) {
	        DB::table('users')->insert([
	            'name' => $faker->name,
	            'username' => $faker->username,
	            'email' => $faker->email,
	            'phone' => $faker->phoneNumber,
	            'image' => $faker->imageUrl(640,480)
	        ]);
        }
    }
}
