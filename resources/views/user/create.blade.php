@extends('layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pemilih</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="rounded-top bg-primary py-3 px-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-white"><img class="mr-2" src="/img/pilih.png" alt="tambah"
                        width="20">Tambah Data</h6>
            </div>
            <div class="card-body">
                <form action="/dashboard/user" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
                            value="{{ old('nim') }}" placeholder="Masukkan NIM">

                        @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_pengguna">Nama Pemilih</label>
                        <input type="text" class="form-control @error('nama_pengguna') is-invalid @enderror"
                            id="nama_pengguna" name="nama_pengguna" value="{{ old('nama_pengguna') }}"
                            placeholder="Masukkan nama pemilih">

                        @error('nama_pengguna')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="select2-single-placeholder form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">-- Pilih --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                            name="jurusan" value="{{ old('jurusan') }}" placeholder="Masukkan jurusan">

                        @error('jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi"
                            name="prodi" value="{{ old('prodi') }}" placeholder="Masukkan prodi">

                        @error('prodi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas"
                            name="kelas" value="{{ old('kelas') }}" placeholder="Masukkan kelas">

                        @error('kelas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select class="select2-single-placeholder form-control" name="level" id="level">
                            <option value="">-- Pilih --</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Petugas">Petugas</option>
                            <option value="Pemilih">Pemilih</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                            name="username" value="{{ old('username') }}" placeholder="Masukkan username">

                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="Masukkan password">

                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="/dashboard/user" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection