@extends('layouts.template')
@section('title', 'Admin Create User')
@section('content')
    <form action="{{ route('createBarang') }} " method="post" enctype="multipart/form-data">
        @csrf
            <label for="nama" >Nama</label>
            <input type="text"  id="nama" name="nama" >

            <label for="harga" >Harga</label>
            <input type="text"  id="harga" name="harga">

            <label for="stok" >Stok</label>
            <input type="text"  id="stok" name="stok">

            <label for="satuan" >Satuan</label>
            <input type="text"  id="satuan" name="satuan" >

         
            <label for="deskripsi" >Deskripsi</label>
            <textarea  name="deskripsi" id="deskripsi" cols="30" rows="10"> </textarea>

            <label for="gambar" >Gambar</label>
            <div>
                <img src="" height="200" width="200" alt="..."  id="gambar">
                <label for="file">Ubah</label>
            </div>
            <input onchange="document.getElementById('gambar').src = window.URL.createObjectURL(this.files[0])" type="file" id="file" style="display:none" name="file" accept="image/*">

        <input type="submit" value="Submit">
    </form>
@endsection