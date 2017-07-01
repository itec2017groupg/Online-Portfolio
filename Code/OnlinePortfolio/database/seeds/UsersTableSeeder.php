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
        DB:table('users')->truncate();
        App\User::create([
          'name' => 'nqt',
          'email' => 'nqt1996@gamil.com',
          'password' => bcrypt(123456789)
        ]);
    }
}
