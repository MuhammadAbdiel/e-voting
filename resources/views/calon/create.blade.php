@extends('layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kandidat</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="rounded-top bg-primary py-3 px-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-white"><img class="mr-2" src="/img/pilih.png" alt="tambah"
                        width="20">Tambah Data</h6>
            </div>
            <div class="card-body">
                <form action="/dashboard/calon" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_calon">Nama Kandidat</label>
                        <input type="text" class="form-control @error('nama_calon') is-invalid @enderror"
                            id="nama_calon" name="nama_calon" value="{{ old('nama_calon') }}"
                            placeholder="Masukkan nama calon">
                        @error('nama_calon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Foto Kandidat</label>
                        <img class="img-preview img-fluid mb-3" width="100">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('foto') is-invalid @enderror" id="foto"
                                name="foto" onchange="previewImage()">
                            <label class="custom-file-label" for="foto">Pilih file</label>
                        </div>
                        @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
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
                        <label for="keterangan">Keterangan</label>
                        @error('keterangan')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                        <input id="keterangan" type="hidden" name="keterangan" value="{{ old('keterangan') }}">
                        <trix-editor input="keterangan"></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="/dashboard/calon" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('trix-file-accept', function (event) {
        event.preventDefault();
    })

    function previewImage() {
        const image = document.getElementById('foto');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection