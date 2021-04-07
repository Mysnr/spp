<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $data = [
            ['name' => 'admin', 'guard_name' => 'web'],
            ['name' => 'petugas', 'guard_name' => 'web'],
            ['name' => 'siswa', 'guard_name' => 'web']
        ];

        DB::table('roles')->insert($data);
    }
}
