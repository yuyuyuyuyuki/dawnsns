<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'id' => '001',
                'username' => '山田一郎',
                'mail' => 'tomato@icloud.com',
                'password' => 'tomato',
                'bio' => '誕生日は1月です',
                'image' => 'dawn.png',
                'created_at' => '2021-2-3 12:12:12',
                'updated_at' => '2021-2-5 12:12:12',
            ],
            [
                'id' => '002',
                'username' => '山田二郎',
                'mail' => 'nasu@icloud.com',
                'password' => 'nasu',
                'bio' => '誕生日は2月です',
                'image' => 'image',
                'created_at' => '2021-2-10 13:5:20',
                'updated_at' => '2021-3-10 13:10:20',
            ],

        ]);
        //
    }
}
