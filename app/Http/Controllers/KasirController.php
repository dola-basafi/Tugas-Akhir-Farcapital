<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    function index()
    {
        return view('layouts.kasir.dashboard');
    }
    function addMemberForm()
    {
        return view('layouts.kasir.addMember');
    }
    function addMember(Request $request)
    {
        $validate = [
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'telp' => 'required|unique:users',
            'password' => 'required',
        ];
        $validate = $request->validate($validate);
        $validate['id_role'] = 4;
        User::create($validate);
        return redirect()->route('adminDashboard');
    }
    function transaksiForm()
    {
        return view('layouts.kasir.transaksi');
 
    }
    function transaksi(Request $request)
    {
        
    }
}
