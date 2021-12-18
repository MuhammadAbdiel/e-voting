@extends('layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data User</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="table-responsive p-3">

                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Jenis Kelamin</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Jenis Kelamin</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $admin->nama_pengguna }}</td>
                            <td>{{ $admin->jenis_kelamin }}</td>
                            <td>{{ $admin->username }}</td>
                            <td>{{ $admin->level }}</td>
                            <td>
                                <a href="/dashboard/admin/{{ $admin->username }}/edit" class="btn btn-warning p-1 mb-1">
                                    <img src="/img/edit.png" alt="edit" width="30">
                                </a>
                                <form action="/dashboard/admin/{{ $admin->username }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger p-1"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">
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