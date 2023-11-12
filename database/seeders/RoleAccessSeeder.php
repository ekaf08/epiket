<?php

namespace Database\Seeders;

use App\Models\RoleAccess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'role_id' => 1,
                'as_role' => 'admin',
                'menu_id' => 1,
                'as_menu' => 'dashboard',
                'sort' => null,
                'view' => true,
                'insert' => true,
                'update' => true,
                'delete' => true,
                'import' => true,
                'export' => true,
            ],
            [
                'role_id' => 1,
                'as_role' => 'admin',
                'menu_id' => 2,
                'as_menu' => 'master',
                'sort' => null,
                'view' => true,
                'insert' => true,
                'update' => true,
                'delete' => true,
                'import' => true,
                'export' => true,
            ],
            [
                'role_id' => 1,
                'as_role' => 'admin',
                'menu_id' => 3,
                'as_menu' => 'master jam',
                'sort' => null,
                'view' => true,
                'insert' => true,
                'update' => true,
                'delete' => true,
                'import' => true,
                'export' => true,
            ],
            [
                'role_id' => 1,
                'as_role' => 'admin',
                'menu_id' => 4,
                'as_menu' => 'master skpd',
                'sort' => null,
                'view' => true,
                'insert' => true,
                'update' => true,
                'delete' => true,
                'import' => true,
                'export' => true,
            ],
            [
                'role_id' => 1,
                'as_role' => 'admin',
                'menu_id' => 5,
                'as_menu' => 'master pengguna',
                'sort' => null,
                'view' => true,
                'insert' => true,
                'update' => true,
                'delete' => true,
                'import' => true,
                'export' => true,
            ],
            [
                'role_id' => 1,
                'as_role' => 'admin',
                'menu_id' => 6,
                'as_menu' => 'master event',
                'sort' => null,
                'view' => true,
                'insert' => true,
                'update' => true,
                'delete' => true,
                'import' => true,
                'export' => true,
            ],
            [
                'role_id' => 1,
                'as_role' => 'admin',
                'menu_id' => 7,
                'as_menu' => 'administrasi',
                'sort' => null,
                'view' => true,
                'insert' => true,
                'update' => true,
                'delete' => true,
                'import' => true,
                'export' => true,
            ],
            [
                'role_id' => 1,
                'as_role' => 'admin',
                'menu_id' => 8,
                'as_menu' => 'entry jadwal piket',
                'sort' => null,
                'view' => true,
                'insert' => true,
                'update' => true,
                'delete' => true,
                'import' => true,
                'export' => true,
            ],
            [
                'role_id' => 1,
                'as_role' => 'admin',
                'menu_id' => 9,
                'as_menu' => 'cetak jadwal piket',
                'sort' => null,
                'view' => true,
                'insert' => true,
                'update' => true,
                'delete' => true,
                'import' => true,
                'export' => true,
            ],
            [
                'role_id' => 3,
                'as_role' => 'skpd',
                'menu_id' => 1,
                'as_menu' => 'dashboard',
                'sort' => null,
                'view' => true,
                'insert' => true,
                'update' => true,
                'delete' => true,
                'import' => true,
                'export' => true,
            ],
        ];

        foreach ($datas as $data) {
            $data['created_at'] = now();
            $data['updated_at'] = null;
            RoleAccess::create($data,);
            // if (!RoleUser::where('url', $data['url'])->first()) {
            // }
        }
    }
}
