<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AngsuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('angsuran')->insert([
            [
                'kontrak_no' => 'IMS001',
                'client_name' => 'Sugus',
                'angsuran_per_bulan' => 16100000,
                'tanggal_jatuh_tempo' => '2024-01-14',
                'status_pembayaran' => 'belum_bayar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kontrak_no' => 'IMS001',
                'client_name' => 'Sugus',
                'angsuran_per_bulan' => 16100000,
                'tanggal_jatuh_tempo' => '2024-02-14',
                'status_pembayaran' => 'belum_bayar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kontrak_no' => 'IMS001',
                'client_name' => 'Sugus',
                'angsuran_per_bulan' => 16100000,
                'tanggal_jatuh_tempo' => '2024-03-14',
                'status_pembayaran' => 'belum_bayar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kontrak_no' => 'IMS001',
                'client_name' => 'Sugus',
                'angsuran_per_bulan' => 16100000,
                'tanggal_jatuh_tempo' => '2024-05-14',
                'status_pembayaran' => 'belum_bayar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kontrak_no' => 'IMS001',
                'client_name' => 'Sugus',
                'angsuran_per_bulan' => 16100000,
                'tanggal_jatuh_tempo' => '2024-06-14',
                'status_pembayaran' => 'belum_bayar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kontrak_no' => 'IMS001',
                'client_name' => 'Sugus',
                'angsuran_per_bulan' => 16100000,
                'tanggal_jatuh_tempo' => '2024-07-14',
                'status_pembayaran' => 'belum_bayar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
