@extends('layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Bilik Suara</h1>
</div>

@if (auth()->user()->status == 0 && !(auth()->user()->level == 'Administrator') || (auth()->user()->level == 'Petugas'))
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
@endif

@if (auth()->user()->status == 0 && auth()->user()->level == 'Pemilih')
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h6><i class="fas fa-info"></i><b> Informasi</b></h6>
            Anda sudah menggukan Hak Suara dengan baik, Terimakasih.
        </div>
    </div>
</div>
@elseif (auth()->user()->status == 0 || auth()->user()->level == 'Administrator')
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h6><i class="fas fa-info"></i><b> Informasi</b></h6>
            Anda adalah Panitia, Panitia hanya bertugas untuk mengawasi jalannya pemilihan.
        </div>
    </div>
</div>
@elseif (auth()->user()->status == 0 || auth()->user()->level == 'Petugas')
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h6><i class="fas fa-info"></i><b> Informasi</b></h6>
            Anda adalah Panitia, Panitia hanya bertugas untuk mengawasi jalannya pemilihan.
        </div>
    </div>
</div>
@else
<div class="row">

    @foreach ($calons as $calon)
    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-body">
                <p class="text-center">{{ $loop->iteration }}</p>

                @if ($calon->foto)
                <img src="{{ asset('storage/' . $calon->foto) }}" width="280" alt="kandidat" class="mb-3">
                @else
                <img src="/img/kandidat.jpg" width="280" alt="kandidat">
                @endif

                <h3 class="text-center mb-3">{{ $calon->nama_calon }}</h3>
                <div class="text-center">
                    <a href="/dashboard/bilik/{{ $calon->username }}" class="btn btn-success pl-1 pr-2 py-1">
                        <img src="/img/detail.png" width="25" alt="detail"> Detail
                    </a>
                    <a href="/dashboard/bilik/{{ $calon->username }}/pilih" class="btn btn-primary px-3 py-2">
                        <img src="/img/pilih.png" width="25" alt="pilih"> Pilih
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endif

@endsection