<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin1.com',
                'is_admin' => '1',
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'User',
                'email' => 'user@user1.com',
                'is_admin' => '0',
                'password' => bcrypt('123456789'),
            ]
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
