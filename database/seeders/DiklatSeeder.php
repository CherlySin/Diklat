<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiklatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        DB::table('diklat')->insert([
            [
            'id_kategori_diklat' => 1,
            'nama_diklat' => 'pendidikan pilot',
            'harga' => 100000,
            'jumlah_minimal_pendaftar' => 5,
            'status' => 'tersedia',
            'durasi' => '1 bulan',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum hic ullam, fugiat molestias porro, autem    mollitia ipsum magni nostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum itaque perspiciatis ducimus temporibus facere facilis nihil quia fugiat possimus illo.',
            'tujuan' => 'tujuan mostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'topik' => 'topik ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'tipe' => 'tipe ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'metode' => 'metode ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'fasilitas' => 'fasilitas ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'persyaratan' => 'persyaratan ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'lokasi' => 'lokasi ostrum quas',
            'gambar' => 'blob gambar belum',
        ], 
            [
            'id_kategori_diklat' => 1,
            'nama_diklat' => 'teknisi pesawat',
            'harga' => 200000,
            'jumlah_minimal_pendaftar' => 6,
            'status' => 'tersedia',
            'durasi' => '1 bulan',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum hic ullam, fugiat molestias porro, autem    mollitia ipsum magni nostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum itaque perspiciatis ducimus temporibus facere facilis nihil quia fugiat possimus illo.',
            'tujuan' => 'tujuan mostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'topik' => 'topik ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'tipe' => 'tipe ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'metode' => 'metode ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'fasilitas' => 'fasilitas ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'persyaratan' => 'persyaratan ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'lokasi' => 'lokasi ostrum quas',
            'gambar' => 'blob gambar belum',
        ], 
            [
            'id_kategori_diklat' => 2,
            'nama_diklat' => 'pramugari',
            'harga' => 500000,
            'jumlah_minimal_pendaftar' => 10,
            'status' => 'tersedia',
            'durasi' => '2 bulan',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum hic ullam, fugiat molestias porro, autem    mollitia ipsum magni nostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum itaque perspiciatis ducimus temporibus facere facilis nihil quia fugiat possimus illo.',
            'tujuan' => 'tujuan mostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'topik' => 'topik ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'tipe' => 'tipe ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'metode' => 'metode ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'fasilitas' => 'fasilitas ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'persyaratan' => 'persyaratan ostrum quas quaerat omnis vel officiis eos nam facere facilis odio minus.',
            'lokasi' => 'lokasi ostrum quas',
            'gambar' => 'blob gambar belum',
        ], 
        ]);
    }
}
