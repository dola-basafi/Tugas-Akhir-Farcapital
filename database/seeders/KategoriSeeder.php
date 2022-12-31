<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Makanan',
                'kode' =>'MK'
            ],
            [
                'nama' => 'Minuman',
                'kode' =>'MN'
            ],
            [
                'nama' => 'Lain-lain',
                'kode' => 'LL'
            ],
        ];
        foreach ($data as  $value) {
            Kategori::create($value);
        }
    }
}
