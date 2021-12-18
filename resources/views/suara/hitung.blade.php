@extends('layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Quick Count</h1>
</div>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Perolehan Suara</h6>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Kandidat</th>
                            <th>Foto Kandidat</th>
                            <th>Jumlah Suara</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($counts as $count)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $count['nama_calon'] }}</td>
                            <td>

                                @if ($count['foto'])
                                <img src="{{ asset('storage/' . $count['foto']) }}" width="80" alt="kandidat">
                                @else
                                <img src="/img/kandidat.jpg" width="80" alt="kandidat">
                                @endif

                            </td>
                            <td>{{ $count['hitung'] }} Suara</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
@endsection