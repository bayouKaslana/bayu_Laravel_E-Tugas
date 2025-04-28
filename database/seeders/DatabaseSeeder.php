<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'nama'      => 'Bayu',
            'email'     => 'admin@gmail.com',
            'jabatan'   => 'Admin',
            'password'  => Hash::make('12345678'),
            'is_tugas'  => false,
        ]);

        User::create([
            'nama'      => 'Alif',
            'email'     => 'alif@gmail.com',
            'jabatan'   => 'Karyawan',
            'password'  => Hash::make('12345678'),
            'is_tugas'  => false,
        ]);

        User::create([
            'nama'      => 'Ade',
            'email'     => 'ade@gmail.com',
            'jabatan'   => 'Karyawan',
            'password'  => Hash::make('12345678'),
            'is_tugas'  => false,
        ]);
    }
}
