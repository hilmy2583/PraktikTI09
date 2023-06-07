<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    //panggil tabel
    protected $table = 'produk';
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
    
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
