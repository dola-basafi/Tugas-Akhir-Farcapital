<?php

namespace App\Http\Livewire;

use App\Models\Barang;
use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function PHPUnit\Framework\isNull;

class TransaksiKasir extends Component
{
    public $data;
    public $transaksi=array();
    public $total = 0;
    public $idMember;
    public function submit()
    {
        if (!isNull($this->idMember)) {
            $this->idMember= '00000000001';
        }
        $idTransaksi = Transaksi::create(['id_kasir'=>Auth::id(),'total'=>2]);
        $this->transaksi[21] = ['daia',2200,1,2200];
        // dd($this->transaksi);
        foreach ($this->transaksi as $key => $value) {
            DetailTransaksi::create([
                'id_barang' => $key,
                'id_transaksi' => $this->idTransaksi->id,
                'id_member' => $this->idMember,
                'jumlah' => $value[2],
                'harga_satuan'  => $value[1],
                'harga_total' => $value[3]
            ]);
        }
    }

    public function addTransaksi($id, $nama, $harga){        
        if (isset($this->transaksi[$id])) {
            $this->transaksi[$id][2] += 1;
            $this->transaksi[$id][3] = $this->transaksi[$id][1] * $this->transaksi[$id][2];
        }else{            
            $this->transaksi[$id] = [$nama,$harga,1,$harga];
        }
    }
    public function mount(){
        $this->transaksi[14] = ['daia',2200,1,2200];
        $this->data = Barang::all();
    }
    public function render()
    {
        $this->total += 1;
        return view('livewire.transaksi-kasir');
    }
}
