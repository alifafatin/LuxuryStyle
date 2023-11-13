@extends('layout.main-admin')

@section('content')
    <div class="main-content w-75">
        <h1> Ganti Foto Unggulan</h1>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Ditambahkan!</strong> Silahkan Lihat Hasilnya
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            @foreach ($fotounggulans as $fotounggulan)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('storage/' . $fotounggulan->fotounggulan) }}" class="card-img-top"
                                alt="...">
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <form action="{{ route('unggulan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" class="form-control @error('fotounggulan') is-invalid @enderror"
                                name="fotounggulan">
                            @error('fotounggulan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <br>

                            <br>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                    name="namabaju"></textarea>
                                <label for="floatingTextarea2">Nama Baju</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                    name="hargabajusebelum"></textarea>
                                <label for="floatingTextarea2">Harga Baju (sebelum)</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                    name="hargabajusesudah"></textarea>
                                <label for="floatingTextarea2">Harga Baju (sesudah)</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                    name="deskripsi"></textarea>
                                <label for="floatingTextarea2">Deskripsi</label>
                            </div>
                            <br>

                            <button class="btn btn-primary" type="submit">Kirim</button>
                            <a class="btn btn-danger" href="{{ route('hapus.unggulan', $fotounggulan->id) }}">Hapus</a>
                        </form>
                    </div>
                </div>
            @endforeach

            <!-- Menampilkan form upload jika tidak ada foto yang ditampilkan -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('unggulan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" class="form-control @error('fotounggulan') is-invalid @enderror"
                                name="fotounggulan">
                            @error('fotounggulan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <br>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                    name="namabaju"></textarea>
                                <label for="floatingTextarea2">Nama Baju</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                    name="hargabajusebelum"></textarea>
                                <label for="floatingTextarea2">Harga Baju (sebelum)</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                    name="hargabajusesudah"></textarea>
                                <label for="floatingTextarea2">Harga Baju (sesudah)</label>
                            </div>
                            <br>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                    name="deskripsi"></textarea>
                                <label for="floatingTextarea2">Deskripsi</label>
                            </div>
                            <br>

                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
