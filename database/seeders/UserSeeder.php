<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = new User();
        // $user->login = 'user';
        // $user->password = bcrypt('user');
        // $user->save();
        // /*$user = new User();
        // $user->username = 'user';
        // $user->password = bcrypt('user');
        // $user->save();*/

        User::factory(2)->create();
    }
}
