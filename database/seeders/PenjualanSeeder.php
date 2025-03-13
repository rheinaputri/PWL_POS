<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id'            => 1,
                'pembeli'            => 'Andi Wijaya',
                'penjualan_kode'     => 'PJ001',
                'penjualan_tanggal'  => Carbon::now(),
            ],
            [
                'user_id'            => 2,
                'pembeli'            => 'Budi Santoso',
                'penjualan_kode'     => 'PJ002',
                'penjualan_tanggal'  => Carbon::now(),
            ],
            [
                'user_id'            => 3,
                'pembeli'            => 'Citra Dewi',
                'penjualan_kode'     => 'PJ003',
                'penjualan_tanggal'  => Carbon::now(),
            ],
            [
                'user_id'            => 1,
                'pembeli'            => 'Deni Kusuma',
                'penjualan_kode'     => 'PJ004',
                'penjualan_tanggal'  => Carbon::now(),
            ],
            [
                'user_id'            => 2,
                'pembeli'            => 'Eka Pratama',
                'penjualan_kode'     => 'PJ005',
                'penjualan_tanggal'  => Carbon::now(),
            ],
            [
                'user_id'            => 3,
                'pembeli'            => 'Fajar Ramadhan',
                'penjualan_kode'     => 'PJ006',
                'penjualan_tanggal'  => Carbon::now(),
            ],
            [
                'user_id'            => 1,
                'pembeli'            => 'Gita Ananda',
                'penjualan_kode'     => 'PJ007',
                'penjualan_tanggal'  => Carbon::now(),
            ],
            [
                'user_id'            => 2,
                'pembeli'            => 'Hendra Saputra',
                'penjualan_kode'     => 'PJ008',
                'penjualan_tanggal'  => Carbon::now(),
            ],
            [
                'user_id'            => 3,
                'pembeli'            => 'Indah Lestari',
                'penjualan_kode'     => 'PJ009',
                'penjualan_tanggal'  => Carbon::now(),
            ],
            [
                'user_id'            => 1,
                'pembeli'            => 'Joko Supriyanto',
                'penjualan_kode'     => 'PJ010',
                'penjualan_tanggal'  => Carbon::now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data);
}
}