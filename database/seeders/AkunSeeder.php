<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'AdminNNf',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234567890'),
            'level' => 'admin',
        ]);
    }
}


// public function run(): void
// {
//     DB::table('users')->insert([
//         'name' => 'Nabila',
//         'email' => 'bila@gmail.com',
//         'password' => Hash::make('12345'),
//         'level' => 'admin',
//     ]);

//     DB::table('users')->insert([
//         'name' => 'Naila',
//         'email' => 'naila@mail.com',
//         'password' => Hash::make('12345'),
//         'level' => 'admin',
//     ]);

//     DB::table('users')->insert([
//         'name' => 'Tin',
//         'email' => 'tin@mail.com',
//         'password' => Hash::make('12345'),
//         'level' => 'admin',
//     ]);

// }
