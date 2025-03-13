<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk tabel `t_penjualan_detail`.
     */
    public function run(): void
    {
        // Ambil semua ID transaksi penjualan yang tersedia
        $penjualan_ids = DB::table('t_penjualan')->pluck('penjualan_id')->toArray();

        // Ambil semua ID barang yang tersedia
        $barang_ids = DB::table('m_barang')->pluck('barang_id')->toArray();

        // Hitung total transaksi dan total barang
        $total_penjualan = count($penjualan_ids);
        $total_barang = count($barang_ids);

        // Pastikan ada data di tabel `t_penjualan` dan `m_barang`
        if ($total_penjualan === 0 || $total_barang === 0) {
            return;
        }

        $detail_penjualan = [];

        // Buat 30 detail penjualan (3 barang untuk setiap transaksi)
        for ($i = 0; $i < 30; $i++) {
            // Pilih transaksi penjualan secara siklus
            $penjualan_id = $penjualan_ids[$i % $total_penjualan];

            // Pilih barang secara acak
            $barang_id = $barang_ids[array_rand($barang_ids)];

            // Ambil harga jual barang dari tabel `m_barang`
            $harga = DB::table('m_barang')
                        ->where('barang_id', $barang_id)
                        ->value('harga_jual');

            // Tentukan jumlah barang secara random (1 - 5)
            $jumlah = rand(1, 5);

            $detail_penjualan[] = [
                'penjualan_id' => $penjualan_id,
                'barang_id'    => $barang_id,
                'harga'        => $harga,
                'jumlah'       => $jumlah,
            ];
        }

        // Masukkan data ke dalam tabel `t_penjualan_detail`
        DB::table('t_penjualan_detail')->insert($detail_penjualan);
    }
}
