@extends('layout.app')
@section('content')
    <div class="page-content">


        <div class="row profile-body">

            <!-- middle wrapper start -->
            <div class="col-md-12 col-xl-12 middle-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Ubah Data Kelompok Produk</h6>

                        <form class="forms-sample" method="POST" action="{{ route('kelompok_produk.update', $kproduk->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="namaKelompok" class="form-label">Nama Kelompok</label>
                                    <input type="text"
                                        class="form-control
                                        @error('nama_kelompok')
                                        is-invalid
                                        @enderror"
                                        name="nama_kelompok" value="{{ $kproduk->nama_kelompok }}" />
                                    @error('nama_kelompok')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea type="text"
                                    class="form-control"
                                    name="deskripsi" >{{ $kproduk->deskripsi }}</textarea>
                            </div>



                            <button type="submit" class="btn btn-primary me-2">
                                Simpan
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
