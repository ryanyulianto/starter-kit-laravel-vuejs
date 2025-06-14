<?php

namespace Database\Seeders;

use App\Models\Auth\User;
use Illuminate\Database\Seeder;
use App\Enums\RoleAndPermission\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '12345678',
                'role' => RoleEnum::ADMIN->value,
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => '12345678',
                'role' => RoleEnum::USER->value,
            ]
        ];
        foreach ($datas as $data) {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
            ]);
            $user->assignRole($data['role']);
        }
    }
}
