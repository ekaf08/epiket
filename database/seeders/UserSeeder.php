<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id_role' => '1',
                'id_skpd' => '1',
                'nama' => 'ekaf',
                'username' => 'ekaf',
                'password' => Hash::make('admins'),
            ],
            [
                'id_role' => '3',
                'id_skpd' => '1',
                'nama' => 'udin',
                'username' => 'udin',
                'password' => Hash::make('admins'),
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
