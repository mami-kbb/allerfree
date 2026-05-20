<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('profiles')->truncate();
        DB::table('users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('users')->insert([
            [
                'name'=>'sample',
                'email'=>'hoge@example.com',
                'email_verified_at' => now(),
                'password'=>Hash::make('hoge1234'),
            ],
            [
                'name'=>'sample2',
                'email'=>'test@example.com',
                'email_verified_at' => now(),
                'password'=>Hash::make('test1234'),
            ],
        ]);
    }
}
