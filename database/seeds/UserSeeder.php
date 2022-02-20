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
        	'name' => 'Owner',
            'email' => 'diansudaryati96@gmail.com',
            'password' => 'diansudaryati',
            'level' => 1
        ]);
    }
}
