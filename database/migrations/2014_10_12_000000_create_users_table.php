<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama_pengguna');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('jurusan');
            $table->string('prodi');
            $table->string('kelas');
            $table->enum('level', ['Administrator', 'Petugas', 'Pemilih']);
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('status', [1, 0]);
            $table->rememberToken();
            $table->timestamps();
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
