<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->insert([
        	'name'	=> 'acc_vendor',
        	'value'	=> 'BRI',
        	]);

        DB::table('configs')->insert([
        	'name'	=> 'acc_no',
        	'value'	=> '1928379865',
        	]);
        
        DB::table('configs')->insert([
        	'name'	=> 'acc_name',
        	'value'	=> 'Pquest',
        	]);
    }
}
