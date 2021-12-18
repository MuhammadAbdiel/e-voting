@extends('layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kandidat</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Kandidat</h6>
            </div>
            <div class="table-responsive p-3">

                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                <a href="/dashboard/calon/create" class="btn btn-primary mb-3">
                    <img src="/img/pilih.png" alt="tambah" width="20"> Tambah Data
                </a>
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
                            <th>No Urut</th>
                            <th>Nama Kandidat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No Urut</th>
                            <th>Nama Kandidat</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($calons as $calon)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $calon->nama_calon }}</td>
                            <td>
                                <a href="/dashboard/calon/{{ $calon->username }}" class="btn btn-info p-1 mb-1">
                                    <img src="/img/show.png" alt="show" width="30">
                                </a>
                                <a href="/dashboard/calon/{{ $calon->username }}/edit" class="btn btn-warning p-1 mb-1">
                                    <img src="/img/edit.png" alt="edit" width="30">
                                </a>
                                <form id="data-{{ $calon->username }}" class="d-inline"
                                    action="/dashboard/calon/{{ $calon->username }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" data-nama="{{ $calon->nama_calon }}"
                                        data-username="{{ $calon->username }}"
                                        class="btn btn-danger p-1 mb-1 delete delete-button">
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