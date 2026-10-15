<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_name' => 'TJ',
            'email' => 'tj@gmail.com',
            'phone' => '01473765638',
            'roll' => 'Admin',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'user_name' => 'Anisur Rahman',
            'email' => 'anis@example.com',
            'phone' => '01711223344',
            'roll' => 'manager',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'user_name' => 'Sumi Akter',
            'email' => 'sumi@example.com',
            'phone' => '01822334455',
            'roll' => 'customer',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'user_name' => 'Rakib Hasan',
            'email' => 'rakib@example.com',
            'phone' => '01933445566',
            'roll' => 'customer',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'user_name' => 'Fahmida Khan',
            'email' => 'fahmida@example.com',
            'phone' => '01544556677',
            'roll' => 'customer',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'user_name' => 'Kamal Hossain',
            'email' => 'kamal@example.com',
            'phone' => '01655667788',
            'roll' => 'customer',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'user_name' => 'Nusrat Jahan',
            'email' => 'nusrat@example.com',
            'phone' => '01366778899',
            'roll' => 'manager',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'user_name' => 'Arif Islam',
            'email' => 'arif@example.com',
            'phone' => '01477889900',
            'roll' => 'customer',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'user_name' => 'Sadia Afrin',
            'email' => 'sadia@example.com',
            'phone' => '01799887766',
            'roll' => 'customer',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'user_name' => 'Imran Ahmed',
            'email' => 'imran@example.com',
            'phone' => '01888776655',
            'roll' => 'customer',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'user_name' => 'Tania Sultana',
            'email' => 'tania@example.com',
            'phone' => '01977665544',
            'roll' => 'customer',
            'password' => Hash::make('12345678'),
        ]);
    }
}
