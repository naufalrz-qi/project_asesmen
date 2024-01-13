<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelompokProduk;

class KelompokProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kproduk = KelompokProduk::latest()->get();
        return view('kelompok_produk.index', compact('kproduk'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelompok_produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelompok' => 'required|unique:kelompok_produk|max:50',
        ]);

        KelompokProduk::insert([
            'nama_kelompok' => $request->nama_kelompok,
            'deskripsi' => $request->deskripsi

        ]);

        $notification = array(
            'message' => 'Kelompok Produk Create Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('kelompok_produk.index')->with($notification);
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
        $kproduk = KelompokProduk::findOrFail($id);
        return view('kelompok_produk.edit', compact('kproduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        KelompokProduk::findOrFail($id)->update([
            'nama_kelompok' => $request->nama_kelompok,
            'deskripsi' => $request->deskripsi

        ]);

        $notification = array(
            'message' => 'Kelompok Produk Berhasil Diubah!',
            'alert-type' => 'success'
        );

        return redirect()->route('kelompok_produk.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        KelompokProduk::findOrFail($id)->delete();
        
        $notification = array(
            'message' => 'Kelompok Produk Delete Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('kelompok_produk.index')->with($notification);
    }
}
