<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Calon;
use App\Models\JenisKelamin;
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
        User::create([
            'nim' => '2031710156',
            'nama_pengguna' => 'Muhammad Abdiel Firjatullah',
            'jenis_kelamin' => 'L',
            'jurusan' => 'Teknologi Informasi',
            'prodi' => 'Manajemen Informatika',
            'kelas' => 'MI2C',
            'level' => 'Administrator',
            'username' => 'muhammadabdiel',
            'password' => bcrypt('13122001'),
            'status' => 1
        ]);

        User::create([
            'nim' => '2135468790',
            'nama_pengguna' => 'Sukuna Hikona',
            'jenis_kelamin' => 'P',
            'jurusan' => 'Teknik Elektro',
            'prodi' => 'Teknik Listrik',
            'kelas' => 'MI2Z',
            'level' => 'Pemilih',
            'username' => 'sukunahikona',
            'password' => bcrypt('password'),
            'status' => 1
        ]);

        User::create([
            'nim' => '8795462130',
            'nama_pengguna' => 'Brakiti Plukuthuk',
            'jenis_kelamin' => 'L',
            'jurusan' => 'Teknik Sipil',
            'prodi' => 'Manajemen Rekayasa Konstruksi',
            'kelas' => 'MI2J',
            'level' => 'Petugas',
            'username' => 'uthukuthuk',
            'password' => bcrypt('password'),
            'status' => 1
        ]);

        Calon::create([
            'nama_calon' => 'Rangga Budulan',
            'username' => 'dulanansembarangkalir',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus obcaecati amet placeat odit sequi, et alias neque sapiente error laborum, veritatis architecto optio perspiciatis, officia debitis consequuntur sint eos laudantium!'
        ]);

        Calon::create([
            'nama_calon' => 'Fruzukucak Maltutu',
            'username' => 'tulalakucak',
            'keterangan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati cumque eveniet illum esse sapiente accusantium quos dignissimos, reprehenderit quibusdam odio voluptatem eligendi expedita, iure doloribus tenetur vero eaque provident laboriosam.'
        ]);

        Calon::create([
            'nama_calon' => 'Surmanan Tul Gatul',
            'username' => 'iwakgatul',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam reprehenderit veritatis laborum laudantium voluptates commodi aut! Id sed officiis cupiditate dolores animi placeat enim provident ab fuga numquam, delectus officia.'
        ]);

        // User::factory(9)->create();

        // Calon::factory(3)->create();
    }
}
