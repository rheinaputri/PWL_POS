<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'Supplier A',
                'supplier_alamat' => 'Jl. Merdeka',
            ],
            [
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'Supplier B',
                'supplier_alamat' => 'Jl. Sudirman',
            ],
            [
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'Supplier C',
                'supplier_alamat' => 'Jl. Diponegoro',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
