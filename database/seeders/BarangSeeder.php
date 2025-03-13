<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                // Elektronika (kategori_id = 1) -> Kode ELK
                [
                    'kategori_id' => 1,
                    'barang_kode' => 'ELK001',
                    'barang_nama' => 'Setrika Listrik',
                    'harga_beli' => 180000,
                    'harga_jual' => 250000,
                ],
                [
                    'kategori_id' => 1,
                    'barang_kode' => 'ELK002',
                    'barang_nama' => 'Hair Dryer',
                    'harga_beli' => 120000,
                    'harga_jual' => 170000,
                ],
                [
                    'kategori_id' => 1,
                    'barang_kode' => 'ELK003',
                    'barang_nama' => 'Blender',
                    'harga_beli' => 300000,
                    'harga_jual' => 400000,
                ],
                [
                    'kategori_id' => 1,
                    'barang_kode' => 'ELK004',
                    'barang_nama' => 'Magic Com',
                    'harga_beli' => 350000,
                    'harga_jual' => 450000,
                ],
                [
                    'kategori_id' => 1,
                    'barang_kode' => 'ELK005',
                    'barang_nama' => 'Speaker Bluetooth',
                    'harga_beli' => 120000,
                    'harga_jual' => 180000,
                ],
            
                // Pakaian (kategori_id = 2) -> Kode PKN
                [
                    'kategori_id' => 2,
                    'barang_kode' => 'PKN001',
                    'barang_nama' => 'Kaos Polos',
                    'harga_beli' => 50000,
                    'harga_jual' => 80000,
                ],
                [
                    'kategori_id' => 2,
                    'barang_kode' => 'PKN002',
                    'barang_nama' => 'Kemeja Formal',
                    'harga_beli' => 100000,
                    'harga_jual' => 150000,
                ],
                [
                    'kategori_id' => 2,
                    'barang_kode' => 'PKN003',
                    'barang_nama' => 'Celana Jeans',
                    'harga_beli' => 120000,
                    'harga_jual' => 180000,
                ],
                [
                    'kategori_id' => 2,
                    'barang_kode' => 'PKN004',
                    'barang_nama' => 'Jaket Hoodie',
                    'harga_beli' => 200000,
                    'harga_jual' => 280000,
                ],
                [
                    'kategori_id' => 2,
                    'barang_kode' => 'PKN005',
                    'barang_nama' => 'Sepatu Sneakers',
                    'harga_beli' => 250000,
                    'harga_jual' => 350000,
                ],
            
                // Makanan (kategori_id = 3) -> Kode MKN
                [
                    'kategori_id' => 3,
                    'barang_kode' => 'MKN001',
                    'barang_nama' => 'Roti Tawar',
                    'harga_beli' => 10000,
                    'harga_jual' => 15000,
                ],
                [
                    'kategori_id' => 3,
                    'barang_kode' => 'MKN002',
                    'barang_nama' => 'Susu Kotak',
                    'harga_beli' => 5000,
                    'harga_jual' => 8000,
                ],
                [
                    'kategori_id' => 3,
                    'barang_kode' => 'MKN003',
                    'barang_nama' => 'Mie Instan',
                    'harga_beli' => 3000,
                    'harga_jual' => 5000,
                ],
                [
                    'kategori_id' => 3,
                    'barang_kode' => 'MKN004',
                    'barang_nama' => 'Biskuit',
                    'harga_beli' => 7000,
                    'harga_jual' => 12000,
                ],
                [
                    'kategori_id' => 3,
                    'barang_kode' => 'MKN005',
                    'barang_nama' => 'Minuman Soda',
                    'harga_beli' => 8000,
                    'harga_jual' => 13000,
                ],
            
        ];

        DB::table('m_barang')->insert($data);
    }
}
