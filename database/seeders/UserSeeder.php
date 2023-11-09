<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id_level' => '1',
                'id_skpd' => '1',
                'nama' => 'ekaf',
                'username' => 'admin',
                'password' => 'admins',
            ],
        ];

        foreach ($users as $user) {
            $user['created_at'] = now();
            $user['updated_at'] = null;
            if (!User::where('username', $user['username'])->first()) {
                User::create(
                    $user,
                );
            }
        }
    }
}
