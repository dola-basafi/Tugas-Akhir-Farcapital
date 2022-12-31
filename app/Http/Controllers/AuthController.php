<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      // dd(Auth::user()->id_role);
      switch (Auth::user()->id_role) {
        case 1:
          return redirect()->route('adminDashboard');
          break;
        case 2:
          
          return redirect()->route('gudangDashboard');
          break;
        case 3:

          break;        
        default:
          # code...
          break;
      }
      
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
  function registerForm()
  {
    return view('layouts.register');
  }
  function register(Request $request)
  {
    $validate = [
      'nama' => 'required|max:255',
      'email' => 'required|email|unique:users',
      'telp' => 'required|unique:users',
      'password' => 'required',
    ];
    $validate = $request->validate($validate);
    User::create($validate);
    return redirect()->route('login');
  }
}
