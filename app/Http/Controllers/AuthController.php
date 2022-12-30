<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function loginForm()
  {
    return view('layouts.loginForm');
  }
  function login(Request $request)
  {
    $credentials = $request->validate([
      'telp' => ['required', 'numeric'],
      'password' => ['required'],
    ]);
    // $user =  User::where('telp',  $request->input('telp'))->first();
    // // $user = User::find(1);
    // // dd($user->password);
    // dd(Hash::check($request->input('password'),$user->password));
    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->route('adminDashboard');
    }

    return back()->withErrors([
      'msg' => 'password atau nomor telpon yang anda masukkan salah',
    ])->onlyInput('email');
  }

  function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
  }
}
