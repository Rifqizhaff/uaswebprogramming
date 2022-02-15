<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            [
                'id' => '1',
                'first_name' => 'admin',
                'mid_name' => 'seed',
                'last_name' => 'admin',
                'genders_id' => '1',
                'roles_id' => '1',
                'image' => 'https://randomuser.me/api/portraits/thumb/men/24.jpg',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin12345'),
            ],
            [
                'id' => '2',
                'first_name' => 'user',
                'mid_name' => 'seed',
                'last_name' => 'user',
                'genders_id' => '2',
                'roles_id' => '2',
                'image' => 'https://randomuser.me/api/portraits/thumb/men/28.jpg',
                'email' => 'user@user.com',
                'password' => Hash::make('admin12345'),
            ]
        ]);
    }
}
