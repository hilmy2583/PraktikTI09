<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;
    //panggil tabel
    protected $table = 'produk';
    public $timestamps = false;
    //kolom yang bisa diisi
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id',
    ];
    
    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    } //fungsi ini diarahkan ke models KategoriProduk dan berelasi one to many

    public function getAllData(){
        return DB::table('produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
        ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        ->get();
    }
    
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
