<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
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
                'user_id' => 1,
                'as_user' => 'ekaf',
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
            RoleUser::create($data,);
            // if (!RoleUser::where('url', $data['url'])->first()) {
            // }
        }
    }
}
