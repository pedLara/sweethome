<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                'role_id'       => 1,
                'given_name'    => 'Admin',
                'last_name'     => 'Acc',
                'email'         => 'admin@admin.com',
                'image'         => 'default.png',
                'about'         => 'Bio of admin',
                'password'      => bcrypt('123456'),
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'role_id'       => 2,
                'given_name'    => 'Agent',
                'last_name'     => 'Acc',
                'email'         => 'agent@agent.com',
                'image'         => 'default.png',
                'about'         => '',
                'password'      => bcrypt('123456'),
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'role_id'       => 3,
                'given_name'    => 'User',
                'last_name'     => 'Acc',
                'email'         => 'user@user.com',
                'image'         => 'default.png',
                'about'         => null,
                'password'      => bcrypt('123456'),
                'created_at'    => date("Y-m-d H:i:s")
            ],
        ]);


        DB::table('roles')->    insert([
            [
                'name'          => 'Admin',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'name'          => 'Agent',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'name'          => 'Seeker',
                'created_at'    => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
