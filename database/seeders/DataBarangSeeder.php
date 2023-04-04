<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_barangs=[[
            'kode_barang'=>'001',
            'nama_barang'=> 'Indomie',
            'kategori_barang'=> 'Makanan',
            'harga'=>'3000',
            'qty'=>'100',
        ],
        [
            'kode_barang'=>'002',
            'nama_barang'=> 'Pocari Sweat',
            'kategori_barang'=> 'Minuman',
            'harga'=>'6000',
            'qty'=>'50',
        ],
        [
            'kode_barang'=>'003',
            'nama_barang'=> 'Silverqueen',
            'kategori_barang'=> 'Snack',
            'harga'=>'12500',
            'qty'=>'45',
        ],
        [
            'kode_barang'=>'004',
            'nama_barang'=> 'Es kiko',
            'kategori_barang'=> 'Minuman',
            'harga'=>'10000',
            'qty'=>'55',
        ],
        [
            'kode_barang'=>'005',
            'nama_barang'=> 'Minyak',
            'kategori_barang'=> 'Dapur',
            'harga'=>'15000',
            'qty'=>'100',
        ],
        [
            'kode_barang'=>'006',
            'nama_barang'=> 'Indomilk',
            'kategori_barang'=> 'Minuman',
            'harga'=>'8000',
            'qty'=>'250',
        ],
        [
            'kode_barang'=>'007',
            'nama_barang'=> 'Sawi',
            'kategori_barang'=> 'Sayur',
            'harga'=>'10000',
            'qty'=>'50',
        ],
        [
            'kode_barang'=>'008',
            'nama_barang'=> 'Apel',
            'kategori_barang'=> 'Buah',
            'harga'=>'5000',
            'qty'=>'10',
        ]
    
    ];
        DB::table('data_barangs')->insert($data_barangs);
    }
}
