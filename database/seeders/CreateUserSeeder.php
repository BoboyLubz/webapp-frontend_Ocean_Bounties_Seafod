<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
                ['name'=>'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 0
                ],
                ['name'=>'Clerk',
                'email' => 'clerk@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 1
                ],
        ];
        foreach($users as $user)
        {
            User::create($user);
        }
    }
}
