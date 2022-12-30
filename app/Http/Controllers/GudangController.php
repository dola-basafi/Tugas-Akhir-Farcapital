<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GudangController extends Controller
{
    function store(Request $request)
    {
        //validasi dulu
        if ($request->hasFile('foto')) {
            $payload['foto'] = $request->file('foto')->store('files', 'public');            
        }
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
