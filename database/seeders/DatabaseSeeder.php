<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Prodi::create(
            [
                'nama' => 'Sistem Informasi'
            ]
        );
        Prodi::create(
            [
                'nama' => 'Teknik Informatika'
            ]
        );
        Prodi::create(
            [
                'nama' => 'Manajemen Informatika'
            ]
        );
    }
}
