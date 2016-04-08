<?php 
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
	public function run() {
		$user = array (
			'name' => 'admin',
			'email' => 'admin@admin.com',
			'password' => Hash::make('admin'),
			'created_at' => DB::raw('NOW()'),
			'updated_at' => DB::raw('NOW()'),
			);
		DB::table('users')->insert($user);
	}
}

 ?>