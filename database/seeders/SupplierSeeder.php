<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
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
                'nama' => 'Wings',
                'alamat' => 'Jakarta',
                'email' => 'wings@email.com',
                'telp' => '08123456761'
            ],
            [
                'nama' => 'Indofood',
                'alamat' => 'Bandung',
                'email' => 'indofood@email.com',
                'telp' => '08123456762'
            ],[
                'nama' => 'Uniliver',
                'alamat' => 'Surabaya',
                'email' => 'uniliver@email.com',
                'telp' => '08123456763'
            ],

        ];
        foreach ($data as $value) {
            Supplier::create($value);
        }
    }
}
