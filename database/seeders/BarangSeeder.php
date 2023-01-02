<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {           
        $files = Storage::allFiles('public/files');
        Storage::delete($files);
        $files = scandir(public_path('/barangSeed'));
        foreach ($files as $key => $value) {
          if ($key > 1) {
            copy(public_path('/barangSeed/') . $value, storage_path('app/public/files/') . $value);
          }
        }
        $data = [
            [
                'nama' => 'Daia',
                'kode' => 'LL001',
                'satuan' =>'Dus',
                'harga' => 3000,
                'stok' => 100,
                'id_kategori' => 3,
                'gambar' => 'storage/files/Wings-Daia.png',
                'id_supplier' => 1,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],
            [
                'nama' => 'Ekonomi-Liquid',
                'kode' => 'LL002',
                'satuan' =>'Dus',
                'harga' => 3500,
                'stok' => 90,
                'id_kategori' => 3,
                'gambar' => 'storage/files/Wings-Ekonomi-Liquid.png',
                'id_supplier' => 1,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],
            [
                'nama' => 'ChocoDrink',
                'kode' => 'MN001',
                'satuan' =>'Dus',
                'harga' => 3300,
                'stok' => 80,
                'id_kategori' => 2,
                'gambar' => 'storage/files/Wings-Logo-ChocoDrink.png',
                'id_supplier' => 1,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],
            [
                'nama' => 'Floridina',
                'kode' => 'MN002',
                'satuan' =>'Dus',
                'harga' => 2000,
                'stok' => 70,
                'id_kategori' => 2,
                'gambar' => 'storage/files/Wings-Logo-Floridina.png',
                'id_supplier' => 1,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],            
            [
                'nama' => 'Javana',
                'kode' => 'MN003',
                'satuan' =>'Dus',
                'harga' => 1000,
                'stok' => 74,
                'id_kategori' => 2,
                'gambar' => 'storage/files/Wings-Logo-Javana.png',
                'id_supplier' => 1,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],
            [
                'nama' => 'Bimoli',
                'kode' => 'LL004',
                'satuan' =>'Dus',
                'harga' => 2400,
                'stok' => 70,
                'id_kategori' => 3,
                'gambar' => 'storage/files/indofood-bimoli.jpg',
                'id_supplier' => 2,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],
            [
                'nama' => 'cap-enak',
                'kode' => 'MN004',
                'satuan' =>'Dus',
                'harga' => 2000,
                'stok' => 70,
                'id_kategori' => 2,
                'gambar' => 'storage/files/indofood-cap-enak.jpg',
                'id_supplier' => 2,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],
            [
                'nama' => 'chitato',
                'kode' => 'MK001',
                'satuan' =>'Dus',
                'harga' => 2000,
                'stok' => 70,
                'id_kategori' => 1,
                'gambar' => 'storage/files/indofood-chitato.jpg',
                'id_supplier' => 2,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],
            [
                'nama' => 'pop-mie',
                'kode' => 'MK002',
                'satuan' =>'Dus',
                'harga' => 7000,
                'stok' => 70,
                'id_kategori' => 1,
                'gambar' => 'storage/files/indofood-pop-mie.jpg',
                'id_supplier' => 2,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],
            [
                'nama' => 'segitiga-biru',
                'kode' => 'LL005',
                'satuan' =>'Dus',
                'harga' => 2000,
                'stok' => 70,
                'id_kategori' => 3,
                'gambar' => 'storage/files/indofood-segitiga-biru.jpg',
                'id_supplier' => 2,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],

            [
                'nama' => 'axe',
                'kode' => 'LL006',
                'satuan' =>'Dus',
                'harga' => 2000,
                'stok' => 70,
                'id_kategori' => 3,
                'gambar' => 'storage/files/uniliver-axe.webp',
                'id_supplier' => 3,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],  [
                'nama' => 'bango',
                'kode' => 'LL007',
                'satuan' =>'Dus',
                'harga' => 2000,
                'stok' => 70,
                'id_kategori' => 3,
                'gambar' => 'storage/files/uniliver-bango.webp',
                'id_supplier' => 3,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],  [
                'nama' => 'lipton',
                'kode' => 'LL008',
                'satuan' =>'Dus',
                'harga' => 2000,
                'stok' => 70,
                'id_kategori' => 3,
                'gambar' => 'storage/files/uniliver-lipton.webp',
                'id_supplier' => 3,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],  [
                'nama' => 'pepsodent',
                'kode' => 'LL009',
                'satuan' =>'Dus',
                'harga' => 2000,
                'stok' => 70,
                'id_kategori' => 3,
                'gambar' => 'storage/files/uniliver-pepsodent.webp',
                'id_supplier' => 3,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],  [
                'nama' => 'molto',
                'kode' => 'LL003',
                'satuan' =>'Dus',
                'harga' => 2000,
                'stok' => 70,
                'id_kategori' => 3,
                'gambar' => 'storage/files/uniliver-molto.webp',
                'id_supplier' => 3,
                'deskripsi' => '<p>DAIA Deterjen dengan 6 keunggulan mampu membersihkan pakaian secara all out dan menjaga warna tetap stand out. Dengan teknologi Dual Scent, White Booster, dan Softener terbagi di dalam 5 varian dari DAIA.</p>'
            ],
            
            
        ];
        foreach ($data as $value) {
            Barang::create($value);
        }
    }
}
