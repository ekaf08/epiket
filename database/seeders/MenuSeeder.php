<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'nama_menu' => 'Dashboard',
                'url' => '/dashboard',
                'id_parent' => null,
                'icon' => 'fonticon-house fs-2',
                'single' => true,
                'status' => true,
                'order' => 1,
            ],
            [
                'nama_menu' => 'Master',
                'url' => 'master',
                'id_parent' => null,
                'icon' => 'fa-solid fa-boxes-stacked',
                'status' => true,
                'order' => 2,
            ],
            [
                'nama_menu' => 'Master Jam',
                'url' => 'master.jam',
                'id_parent' => '2',
                'icon' => 'master',
                'status' => true,
            ],
            [
                'nama_menu' => 'Master SKPD',
                'url' => 'naster.skpd',
                'id_parent' => '2',
                'icon' => 'master',
                'status' => true,
            ],
            [
                'nama_menu' => 'Master Pengguna',
                'url' => 'master.pengguna',
                'id_parent' => '2',
                'icon' => 'master',
                'status' => true,
            ],
            [
                'nama_menu' => 'Master Event',
                'url' => 'master.event',
                'id_parent' => '2',
                'icon' => 'master',
                'status' => true,
            ],
            [
                'nama_menu' => 'Administrasi',
                'url' => 'administrasi',
                'id_parent' => null,
                'icon' => 'fonticon-stats fs-2',
                'status' => true,
                'order' => 3,
            ],
            [
                'nama_menu' => 'Entri Jadwal Piket',
                'url' => 'administrasi.jadwal',
                'id_parent' => '7',
                'icon' => 'master',
                'status' => true,
            ],
            [
                'nama_menu' => 'Cetak Jadwal Piket',
                'url' => 'administrasi.cetak',
                'id_parent' => '7',
                'icon' => 'master',
                'status' => true,
            ],
        ];

        foreach ($menus as $menu) {
            $menu['created_at'] = now();
            $menu['updated_at'] = null;
            if (!Menu::where('url', $menu['url'])->first()) {
                Menu::create(
                    $menu,
                );
            }
        }
    }
}
