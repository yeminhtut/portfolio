<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 DB::table('users')->delete();
		 User::create(array(
        'name'     => 'Ye Min Htut',
        'user_name' => 'yeminhtut',
        'email'    => 'yehtut.it@gmail.com',
        'password' => Hash::make('Me$$enger21'),
    ));
	}

}
