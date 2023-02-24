<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Kategori;
use App\Models\Siswa;
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
        Admin::create(
            [
                'username' => 'admin',
                'password' => bcrypt('admin')
            ]
        );

        Kategori::create(
            [
                'ket_kategori' => 'Kebersihan'
            ]
        );

        Kategori::create(
            [
                'ket_kategori' => 'Keamanan'
            ]
        );

        Kategori::create(
            [
                'ket_kategori' => 'Kesehatan'
            ]
        );

        Siswa::create(
            [
                'nis' => '20208080',
                'kelas' => 'XII T13'
            ]
        );

        Siswa::create(
            [
                'nis' => '20208980',
                'kelas' => 'XII T10'
            ]
        );

        Siswa::create(
            [
                'nis' => '20207755',
                'kelas' => 'XII T7'
            ]
        );
    }
}
