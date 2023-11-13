@extends('layout.main-admin')

@section('content')
<div class="main-content w-75">
    <h1> Ganti Foto Tentang</h1>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan!</strong> Silahkan Lihat Hasilnya
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        @foreach ($fototentangs as $fototentang)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $fototentang->fototentang) }}" class="card-img-top"
                            alt="...">
                    </div>
                </div>
                <div class="input-group mb-2">
                    <form action="{{ route('tentang.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control @error('fototentang') is-invalid @enderror"
                            name="fototentang">
                        @error('fototentang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <br>
                        <button class="btn btn-primary" type="submit">Kirim</button>
                        <a class="btn btn-danger" href="{{ route('delete-gambar', $fototentang->id) }}">Hapus</a>
                    </form>
                </div>
            </div>
        @endforeach

        <!-- Menampilkan form upload jika tidak ada foto yang ditampilkan -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('tentang.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control @error('fototentang') is-invalid @enderror"
                            name="fototentang">
                        @error('fototentang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <br>
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
