<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'address' => 'Jl. Antasan Kecil Barat',
            'number' => '081208120812',
            'roles' => 'Superadmin',
            'password' => bcrypt('secret'),
        ]);
    }
}
