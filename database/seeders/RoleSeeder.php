<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'Admin'],
            ['nama' => 'Gudang'],
            ['nama' => 'Kasir'],
            ['nama' => 'Member']
        ];
        foreach ($data as  $value) {
            Role::create($value);
        }
    }
}
