<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GudangController extends Controller
{
    function index()
    {
        $data = Barang::all();
        return view('layouts.gudang.dashboard',compact('data'));
    }
    function createBarangForm()
    {
        return view('layouts.gudang.createBarang');
    }
    function createBarang(Request $request)
    {

        $request['id_kategori'] = strval($request->input('id_kategori'));
        $request['id_supplier'] = strval($request->input('id_supplier'));

        $kode = Kategori::find($request['id_kategori']);
        $kodeName = DB::table('barang')->where('id_kategori', '=' ,$request->input('id_supplier') )->latest() ->first();
        $kode = $kode->kode .  sprintf('%03d', intval(substr($kodeName->kode,2)+1));
        // dd($kode);
        

        $validate = [
            'nama' => 'required|max:255',
            'harga' => 'required|numeric|min:1',
            'stok' => 'required|numeric|min:1',
            'deskripsi' => 'required',
            'satuan' => 'required|max:255',
            'id_kategori' => 'required|numeric',
            'id_supplier' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',            
        ];

        $validate = $request->validate($validate);
        $validate['kode'] = $kode;
        
            $path = Storage::putFile('public/files',$request->file('gambar'));
            $store = explode('/',$path);
            $store[0] = 'storage';
            $validate['gambar'] =implode('/',$store);
        
        Barang::create($validate);
        return redirect()->route('gudangDashboard');

    }
    function update(Request $request,$id)
    {   $barang = Barang::find($id);
        //validasi dulu

        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($barang->foto);
            $payload['foto'] = $request->file('foto')->store('files', 'public');            
        }
    }
    function delete(Request $request, $id)
    {
        $barang = Barang::find($id);
        // cek apakah barang ada dulu
        Storage::disk('public')->delete($barang->foto);
        $barang->delete(); 
    }
}
