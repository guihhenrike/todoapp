<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        //
        User::create([
            'name' => 'Guilherme Henrique',
            'email' => 'guilherme@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
