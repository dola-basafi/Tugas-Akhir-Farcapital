<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $has = Hash::make('123321');
        $data = [
          'nama' => 'dola',
          'email'=> 'dola@mail.com',
          'telp' => '08123456789',
          'password' =>$has,
          'id_role' => 1,          
        ];
        User::create($data);
    }
}
