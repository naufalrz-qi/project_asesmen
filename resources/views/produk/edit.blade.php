@extends('layout.app')
@section('content')
    <div class="page-content">


        <div class="row profile-body">

            <!-- middle wrapper start -->
            <div class="col-md-12 col-xl-12 middle-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Ubah Data Produk</h6>

                        <form id="produkForm" class="forms-sample" method="POST" action="{{ route('produk.update', $produk->id) }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="kodeProduk" class="form-label">Kode Produk</label>
                                    <div class="d-flex flex-row">
                                        <input type="text"
                                            class="form-control
                                        @error('kode_produk')
                                        is-invalid
                                        @enderror"
                                            name="kode_produk" maxlength="15"
                                            value="{{ $produk->kode_produk }}"/>
                                            <a onclick="cari()" class="btn btn-primary"><i data-feather="search"></i></a>
                                    </div>

                                    @error('kode_produk')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3">

                                <label for="namaProduk" class="form-label">Nama Produk</label>

                                <input type="text"
                                    class="form-control
                                        @error('nama_produk')
                                        is-invalid
                                        @enderror"
                                    name="nama_produk"
                                    value="{{ $produk->nama_produk }}" />

                                @error('nama_produk')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="hargaBeli" class="form-label">Harga Beli</label>
                                    <span class="input-group-text">Rp</span>
                                    <input type="number"
                                        class="form-control
                                        @error('harga_beli')
                                        is-invalid
                                        @enderror"
                                        id="harga_beli"
                                        name="harga_beli"
                                        value="{{ $produk->harga_beli }}"/>


                                    @error('harga_beli')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-md-6">
                                    <label for="hargaJual" class="form-label">Harga Jual</label>
                                    <span class="input-group-text">Rp</span>
                                    <input type="number"
                                        class="form-control
                                        @error('harga_jual')
                                        is-invalid
                                        @enderror"
                                        id="harga_jual"
                                        name="harga_jual"
                                        value="{{ $produk->harga_jual }}" />


                                    @error('harga_jual')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Status Produk</label>
                                    <select class="js-example-basic-single form-select" name="status_produk" data-width="100%" value="{{ $produk->status_produk }}">

                                            <option value="tunai">Tunai</option>
                                            <option value="kredit">Kredit</option>
                                            <option value="konsinyasi">Konsinyasi</option>

                                    </select>
                                    @error('status_produk')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Kelompok Produk</label>
                                    <select class="js-example-basic-single form-select" value="{{ $produk->kelompokProduk->nama_kelompok }}" name="kelompok_produk_id" data-width="100%">
                                        @foreach ($kproduk as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_kelompok }}</option>
                                        @endforeach
                                    </select>
                                    @error('kelompok_produk_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <br>
                                    <br>
                                    <label class="form-label">Stok</label>
                                    <input type="number"
                                    class="form-control
                                    @error('stok')
                                    is-invalid
                                    @enderror"
                                    name="stok"
                                    value="{{ $produk->stok }}"/>


                                @error('stok')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>



                            <button type="submit" class="btn btn-primary me-2 ">
                                Simpan
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
@section('script')

<script>
    function cari() {
        // Change the form action to the search route
        $('#produkForm').attr('action', '{{ route('produk.search') }}');

        // Submit the form
        $('#produkForm').submit();
    }
</script>
@endsection
