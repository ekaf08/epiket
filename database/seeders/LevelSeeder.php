<?php

namespace Database\Seeders;

use App\Models\Level;
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
                'nama_level' => 'admin'
            ],
            [
                'nama_level' => 'walikota'
            ],
            [
                'nama_level' => 'skpd'
            ],
            [
                'nama_level' => 'kepala OPD'
            ],
        ];

        foreach ($datas as $key) {
            $key['created_at'] = now();
            $key['updated_at'] = null;

            if (!Level::where('nama_level', $key['nama_level'])->first()) {
                Level::create($key);
            }
        }
    }
}
