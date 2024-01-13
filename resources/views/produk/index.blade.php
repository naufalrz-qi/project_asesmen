@extends('layout.app')
@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">Data Produk</li>
            </ol>
            <ol class="breadcrumb">
                <a class="btn btn-inverse-info" href="{{ route('produk.create') }}">Tambah Produk</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Produk</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                        <th>Status Produk</th>
                                        <th>Kelompok Produk</th>
                                        <th>Stok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produk as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1  }}</td>
                                            <td>{{ $item->kode_produk }}</td>
                                            <td>{{ $item->nama_produk }}</td>
                                            <td>Rp{{ number_format($item->harga_beli, 0, ',', '.') }}</td>
                                            <td>Rp{{ number_format($item->harga_jual, 0, ',', '.') }}</td>
                                            <td>{{ $item->status_produk }}</td>
                                            <td>{{ $item->kelompokProduk->nama_kelompok }}</td>
                                            <td>{{ $item->stok }}</td>
                                            <td><a class="btn btn-inverse-warning" href="{{ route('produk.edit', $item->id) }}">Ubah</a>

                                                    <a href="{{ route('produk.destroy', $item->id) }}" type="submit" class="btn btn-inverse-danger" id="delete">Hapus</a>

                                            </td>


                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
