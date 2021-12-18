@extends('layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kandidat</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Detail Kandidat</h6>
            </div>
            <div class="text-center container-fluid mb-3">
                <h3>{{ $calon->nama_calon }}</h3>

                @if ($calon->foto)
                <img src="{{ asset('storage/' . $calon->foto) }}" alt="kandidat" width="200">
                @else
                <img src="/img/kandidat.jpg" alt="kandidat" width="200">
                @endif

                <p>{!! $calon->keterangan !!}</p>
                <a href="/dashboard/calon" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection