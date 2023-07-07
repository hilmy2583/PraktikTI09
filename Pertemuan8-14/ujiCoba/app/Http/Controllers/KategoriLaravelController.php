<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\DB;

class KategoriLaravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kategori_produk = DB::table('kategori_produk')
            ->select('kategori_produk.*')
            ->get();
        //perintah join diatas untuk menggabungkan tabel produk dan kategori_produk
        return view('Pertemuan11.admin.kategori.kategori', compact('kategori_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategori_produk = DB::table('kategori_produk')->get();

        return view('Pertemuan11.admin.kategori.create', compact('kategori_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $kategori_produk = new KategoriProduk;
        $kategori_produk->nama = $request->nama;
        $kategori_produk->save();

        return redirect('adminla/kategori');
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
        //
        $kategori_produk = DB::table('kategori_produk')->where('id', $id)->get();

        return view('Pertemuan11.admin.kategori.edit', compact('kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $kategori_produk = KategoriProduk::find($request->id);
        $kategori_produk->nama = $request->nama;
        $kategori_produk->save();

        return redirect('adminla/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('kategori_produk')->where('id', $id)->delete();

        return redirect('adminla/kategori');
    }
}
