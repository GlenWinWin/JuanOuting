<?php

use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('users')->insert([
      // 	'email' => 'glenwinbernabe@gmail.com',
      //   'username' => 'admin',
      // 	'password' => Hash::make('admin')
      // 	]);
        DB::table('dump')->insert([
        	'name' => 'Juan Dela Cruz',
          'amount' => '5000',
        	'date' => 'February 27,2017',
          'mode' => 'Cebuana'
        	]);
          DB::table('dump')->insert([
          	'name' => 'River Cruz',
            'amount' => '10000',
          	'date' => 'March 05,2017',
            'mode' => 'Cebuana'
          	]);
            DB::table('dump')->insert([
            	'name' => 'Jason Cruz',
              'amount' => '8000',
            	'date' => 'March 07,2017',
              'mode' => 'Cebuana'
            	]);
              DB::table('dump')->insert([
              	'name' => 'Kyle Dugulan',
                'amount' => '7500',
              	'date' => 'March 08,2017',
                'mode' => 'Cebuana'
              	]);
    }
}
