<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\User::class)->create(
            [
                'email' => 'sarthak@gmail.com',
                'name' => 'Sarthak'
            ]
        );

        factory(\App\User::class)->create(
            [
                'email' => 'bitfumes@gmail.com',
                'name' => 'Bitfumes'
            ]
        );

        factory(\App\User::class)->create(
            [
                'email' => 'ankur@gmail.com',
                'name' => 'Ankur'
            ]
        );

        factory(\App\Role::class)->create(
            [
                'name' => 'Administrator'
            ]
        );

        factory(\App\Role::class)->create(
            [
                'name' => 'Moderator'
            ]
        );

        factory(\App\Role::class)->create(
            [
                'name' => 'Guest'
            ]
        );
    }
}
