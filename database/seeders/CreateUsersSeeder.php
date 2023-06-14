<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Lawyer User',
               'email'=>'lawyer@chinekwe.com',
               'type'=>0,
               'password'=> bcrypt('asdfasdf'),
            ],
            [
               'name'=>'Judge User',
               'email'=>'judge@chinekwe.com',
               'type'=> 1,
               'password'=> bcrypt('asdfasdf'),
            ],
            [
               'name'=>'Admin User',
               'email'=>'admin@chinekwe.com',
               'type'=>2,
               'password'=> bcrypt('asdfasdf'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
