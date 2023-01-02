<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'nama' => 'fulan',
            'email'=> 'fulan@mail.com',
            'telp' => '00000000001',
            'password' =>123321,
            'id_role' => 4,       
            'status' => 1,
          ];
          User::create($data);
    }
}
