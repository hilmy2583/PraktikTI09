<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    //kolom yang bisa diisi
    protected $fillable = [
        'tanggal',
        'nama_pemesan',
        'alamat_pemesan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id',
    ];
    
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    } //fungsi ini diarahkan ke models Produk dan berelasi one to many
}
