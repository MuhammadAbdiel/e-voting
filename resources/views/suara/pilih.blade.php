@extends('layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pilih</h1>
</div>

<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Pilih Kandidat</h6>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>Kandidat Pilihan Anda</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <h2>{{ $calon->id }}</h2>

                                @if ($calon->foto)
                                <img src="{{ asset('storage/' . $calon->foto) }}" width="300" class="img-fluid mb-3"
                                    alt="kandidat">
                                @else
                                <img src="/img/kandidat.jpg" width="300" class="img-fluid" alt="kandidat">
                                @endif

                                <h3>{{ $calon->nama_calon }}</h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <form action="/dashboard/bilik/{{ $calon->username }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <button type="submit" class="btn btn-primary">
                                        <img src="/img/pilih.png" width="25" alt="pilih"> Tetapkan Pilihan
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="/dashboard/bilik" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection