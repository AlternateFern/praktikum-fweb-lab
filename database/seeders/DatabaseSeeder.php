<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    User::create([
        'name' => 'Admin Toko',
        'email' => 'admin@barokahmart.test',
        'password' => Hash::make('password'),
        'role' => 'admin',
    ]);
 
    User::create([
        'name' => 'Kasir Rina',
        'email' => 'kasir@barokahmart.test',
        'password' => Hash::make('password'),
        'role' => 'kasir',
    ]);
 
    $this->call(CategorySeeder::class);
}

}
