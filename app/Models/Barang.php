<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    public $guarded = ['id'];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'id_kategori','id');
    }
    public function detail_transaksi(){
        return $this->hasMany(DetailTransaksi::class);
    }
}
