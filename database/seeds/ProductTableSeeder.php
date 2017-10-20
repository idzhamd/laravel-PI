<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for($i=1;$i<=20;$i++){
	      DB::table('products')->insert([
	      	'name'	=> $faker->citySuffix,
	      	'size'	=> $faker->randomNumber(2),
	      	'price'	=> $faker->randomNumber(6),
	      	'desc'	=> $faker->text(400),
	      	'image'	=> 'ageru.jpg'
	      	]);
    	}

    }
}
