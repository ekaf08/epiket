<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'nama_role' => 'admin'
            ],
            [
                'nama_role' => 'walikota'
            ],
            [
                'nama_role' => 'skpd'
            ],
            [
                'nama_role' => 'kepala OPD'
            ],
        ];

        foreach ($datas as $key) {
            $key['created_at'] = now();
            $key['updated_at'] = null;

            if (!Role::where('nama_role', $key['nama_role'])->first()) {
                Role::create($key);
            }
        }
    }
}
