<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelompokProduk;
use App\Models\Produk;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::with('kelompokProduk')->get();

        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kproduk = KelompokProduk::all();

        return view('produk.create', compact('kproduk'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_produk' => 'required|unique:produk|min:12|max:15',
            'nama_produk' => 'required|max:30',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'status_produk' => 'required',
            'kelompok_produk_id' => 'required',
            'stok' => 'required|numeric',
        ]);

        Produk::insert([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'status_produk' => $request->status_produk,
            'kelompok_produk_id' => $request->kelompok_produk_id,
            'stok' => $request->stok,
        ]);

        $notification = array(
            'message' => 'Kelompok Produk Create Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('produk.index')->with($notification);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        $kproduk = KelompokProduk::all();

        return view('produk.edit', compact('produk', 'kproduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_produk' => 'required|min:12|max:15',
            'nama_produk' => 'required|max:30',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'status_produk' => 'required',
            'kelompok_produk_id' => 'required',
            'stok' => 'required|numeric',
        ]);

        Produk::findOrFail($id)->update([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'status_produk' => $request->status_produk,
            'kelompok_produk_id' => $request->kelompok_produk_id,
            'stok' => $request->stok,
        ]);

        $notification = array(
            'message' => 'Kelompok Produk Create Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('produk.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        $notification = array(
            'message' => 'Produk Delete Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('produk.index')->with($notification);
    }
}
