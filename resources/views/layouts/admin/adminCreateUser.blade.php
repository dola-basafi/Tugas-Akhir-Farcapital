@extends('layouts.template')
@section('title', 'Admin Create User')
@section('content')
    <form action="{{ route('adminCreateUser') }} " method="post">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" placeholder="nama"> 
        @error('nama')
            {{ $message }}            
        @enderror
        <br>
        <label for="email">email</label>
        <input type="email" name="email" placeholder="Email"> 
        @error('email')
            {{ $message }}           
        @enderror
        <br>
        <label for="telp">No Telpon</label>
        <input type="text" name="telp" placeholder="nomor telpon"> 
        @error('telp')
            {{ $message }}            
        @enderror
        <br>
        
        <label for="password">Password</label>
        <input type="password" name="password">
        @error('password')
            {{ $message }}            
        @enderror
        <br>
        
        <label for="id_role">Role</label>
        <select name="id_role" id="id_role">
            <option value="2">Gudang</option>
            <option value="3">Kasir</option>
        </select> 
        @error('id_role')
            {{ $message }}
        @enderror
        <br>

        <input type="submit" value="Submit">
    </form>
@endsection