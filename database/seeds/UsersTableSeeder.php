<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
        'username'=> 'root',
        'email' => 'root@ecom.com',
        'password' => bcrypt('root'),
        'full_name' => 'root user',
        'contact_no' => '',
        'address' => '',
        'status' => 1

       ]);
    }
}
