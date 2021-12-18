@extends('layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pemilih</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Pemilih</h6>
            </div>
            <div class="table-responsive p-3">

                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                <a href="/dashboard/user/create" class="btn btn-primary mb-3">
                    <img src="/img/pilih.png" alt="tambah" width="20"> Tambah Data
                </a>
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama User</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Prodi</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama User</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Prodi</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->nim }}</td>
                            <td>{{ $user->nama_pengguna }}</td>
                            <td>{{ $user->jenis_kelamin }}</td>
                            <td>{{ $user->jurusan }}</td>
                            <td>{{ $user->prodi }}</td>
                            <td>{{ $user->kelas }}</td>
                            <td>
                                <a href="/dashboard/user/{{ $user->username }}/edit" class="btn btn-warning p-1 mb-1">
                                    <img src="/img/edit.png" alt="edit" width="30">
                                </a>
                                <form id="data-{{ $user->username }}" action="/dashboard/user/{{ $user->username }}"
                                    method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger p-1 delete"
                                        data-nama="{{ $user->nama_pengguna }}" data-username="{{ $user->username }}">
                                        <img src="/img/hapus.png" alt="hapus" width="30">
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection