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
            'level' => 'Pemilih',
            'username' => 'muhammadabdiel',
            'password' => bcrypt('13122001'),
            'status' => 1
        ]);

        User::factory(9)->create();

        Calon::factory(3)->create();
    }
}
