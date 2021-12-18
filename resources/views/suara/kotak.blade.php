@extends('layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kotak Suara</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Kotak Suara</h6>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Kandidat</th>
                            <th>Pemilih</th>
                            <th>Waktu Memilih</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kandidat</th>
                            <th>Pemilih</th>
                            <th>Waktu Memilih</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($votes as $vote)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $vote->calon->nama_calon }}</td>
                            <td>{{ $vote->user->nama_pengguna }}</td>
                            <td>{{ $vote->waktu_vote }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection