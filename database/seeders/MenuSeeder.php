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
                'url' => 'dashboard',
                'parent' => '0',
                'icon' => 'dasboard',
                'status' => true,
                'order' => 1,
            ],
            [
                'nama_menu' => 'Master',
                'url' => 'master',
                'parent' => '0',
                'icon' => 'master',
                'status' => true,
                'order' => 2,
            ],
            [
                'nama_menu' => 'Master SKPD',
                'url' => 'naster.skpd',
                'parent' => '2',
                'icon' => 'master',
                'status' => true,
            ],
            [
                'nama_menu' => 'Master Pengguna',
                'url' => 'naster.pengguna',
                'parent' => '2',
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
