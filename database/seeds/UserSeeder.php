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
      DB::table('users')->insert([
      	'email' => 'glenwinbernabe@gmail.com',
        'username' => 'admin',
      	'password' => Hash::make('admin')
      	]);
    }
}