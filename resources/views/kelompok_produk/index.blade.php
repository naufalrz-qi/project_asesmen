@extends('layout.app')
@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">Data Kelompok Produk</li>
            </ol>
            <ol class="breadcrumb">
                <a class="btn btn-inverse-info" href="{{ route('kelompok_produk.create') }}">Tambah Kelompok Produk</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Kelompok Produk</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kproduk as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->nama_kelompok }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td><a class="btn btn-inverse-warning" href="{{ route('kelompok_produk.edit', $item->id) }}">Edit</a>
                                                <form action="{{ route('kelompok_produk.destroy', $item->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-inverse-danger " onclick="return confirm('Are you sure you want to delete this item?')">Hapus</button>
                                                </form></td>


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
