<?php

use App\User;
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
        User::create([
            'name' => 'Shifat Ahmed',
            'email' => 'shifat@crud.test',
            'password' => Hash::make('secret'),
            'email_verified_at' => now(),
            'remember_token' => str_random(10),
        ]);
    }
}
