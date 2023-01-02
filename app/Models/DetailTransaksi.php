<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;
    protected $table = 'detail_transaksi';
    public $guarded = ['id'];
    public function barang()
    {
        return $this->belongsTo(Barang::class,'id_barang','id');
    }
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class,'id_transaksi','id');
    }
}
