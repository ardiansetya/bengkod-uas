<?php

namespace Database\Seeders;

use App\Models\Periksa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periksa::create([
            'id_daftar_poli' => 1,
            'tanggal_periksa' => now(),
            'catatan' => 'Pasien diberi obat batuk',
            'biaya_periksa' => 50000
        ]);
    }
}
