<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        /*User::create([
            'name' => 'ダミーユーザー',
            'email' => 'dummy@email',
            'password' => 'user1234',
        ]);/** */
        $init_users = [
            [
                'name' => 'ダミーユーザー',
                'email' => 'dummy@email',
                'password' => 'user1234',
            ],
            [
                'name' => '大森',
                'email' => '2022@omorisan.jp',
                'password' => '6nyg12345',
            ]
        ];
        
        foreach($init_users as $init_user) {
            $user = new User();
            $user->name = $init_user['name'];
            $user->email = $init_user['email'];
            $user->password = Hash::make($init_user['password']);
            $user->save();
        }
    }
}
