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
        // Admin
        User::create([
            'name' => 'Admin Sistem',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Ganti di production
            'role' => 'admin',
        ]);

        // Dokter
        User::create([
            'name' => 'Dr. Budi',
            'email' => 'dokter@example.com',
            'password' => Hash::make('password'),
            'id_poli' => 1, // Pastikan poli dengan ID 1 sudah ada
            'no_hp' => '081234567890',
            'role' => 'dokter',
        ]);

        // Pasien
        User::create([
            'name' => 'Ani Pasien',
            'email' => 'pasien@example.com',
            'password' => Hash::make('password'),
            'alamat' => 'Jl. Mawar No. 1',
            'no_ktp' => '1234567890123456',
            'no_hp' => '082345678901',
            'no_rm' => 'RM001',
            'role' => 'pasien',
        ]);
    }
}
