<?php

namespace Database\Seeders;

use App\Models\Skpd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'nama_skpd' => 'Kominpo',
                'level_pemerintahan' => '1',
            ]
        ];

        foreach ($datas as $key) {
            $user['created_at'] = now();
            $user['updated_at'] = null;
            if (!Skpd::where('nama_skpd', $key['nama_skpd'])->first()) {
                Skpd::create($key);
            }
        }
    }
}
