<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'username' => 'Admin', 'email' => 'admin@admin.com', 'password' => bcrypt('password'), 'remember_token' => ''],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
