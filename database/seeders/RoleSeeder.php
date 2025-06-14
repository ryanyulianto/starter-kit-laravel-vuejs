<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoleAndPermission\Role;
use App\Enums\RoleAndPermission\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (array_column(RoleEnum::cases(), 'value') as $data) {
            Role::create([
                'name' => $data,
            ]);
        }
    }
}
