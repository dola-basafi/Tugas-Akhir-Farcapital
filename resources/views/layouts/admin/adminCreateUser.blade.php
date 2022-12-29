@extends('layouts.template')
@section('title', 'Admin Create User')
@section('content')
    <form action="{{ route('adminRegisterForm') }} " method="post">
        @csrf
        <label for="telp">Nama</label>
        <input type="text" name="nama" placeholder="nama"><br>
        @error('nama')
            {{ $message }}
        @enderror

        <label for="email">email</label>
        <input type="email" name="email" placeholder="Email"><br>
        @error('email')
            {{ $message }}
        @enderror

        <label for="telp">No Telpon</label>
        <input type="text" name="telp" placeholder="nomor telpon"><br>
        @error('telp')
            {{ $message }}
        @enderror

        <label for="telp">No Telpon</label>
        <input type="text" name="telp" placeholder="nomor telpon"><br>
        @error('telp')
            {{ $message }}
        @enderror
        <br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        @error('password')
            {{ $message }}
        @enderror
        <br>
        <input type="submit" value="Submit">
    </form>
@endsection