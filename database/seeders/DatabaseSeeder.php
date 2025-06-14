<?php

namespace Database\Seeders;

use App\Models\Auth\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->baseSeeder();
    }

    private function baseSeeder(){
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
    private function developmentSeeder(){
      
    }
}
