@extends('layouts.template')
@section('title', 'Admin Create User')
@section('content')

    <div class="class="bg-white font-family-karla h-screen"">
        <div class="w-full flex flex-wrap">
            <!-- Login Section -->
            <div class="w-full md:w-1/2 flex flex-col">
                <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                    <p class="text-center text-3xl">Buat Barang</p>
                    <form class="flex flex-col pt-3 md:pt-8" action="{{ route('createBarang') }} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col pt-4">
                            <label for="nama" class="text-lg">Nama</label>
                            <input type="text" id="nama" name="nama" placeholder="Nama anda"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
                        @error('nama')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                            <label for="harga" class="text-lg">Harga</label>
                            <input type="number" name="harga" id="harga" placeholder="harga"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        @error('harga')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                            <label for="stok" class="text-lg">Stok</label>
                            <input type="number" name="stok" id="stok" placeholder="stok"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        @error('stok')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                            <label for="satuan" class="text-lg">Satuan</label>
                            <input type="text" id="satuan" name="satuan" placeholder="satuan"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
                        @error('satuan')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                            <label for="deskripsi" class="text-lg">Deskripsi</label>
                            <input type="text" id="deskripsi" name="deskripsi" placeholder="satuan"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
                        @error('deskripsi')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                            <label for="gambar" class="text-lg">Gambar</label>
                            <div>
                                <img src="" height="200" width="200" alt="..." id="gambar">
                                <label for="file">Ubah</label>
                            </div>
                            <input
                                onchange="document.getElementById('gambar').src = window.URL.createObjectURL(this.files[0])"
                                type="file" id="" name="gambar" accept="image/*">
                        </div>
                        @error('satuan')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                            <label for="kategori" class="text-lg">Kategori</label>
                            <select name="id_kategori" id="kategori"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="1">Makanan</option>                                
                                <option value="2">Minuman</option>
                                <option value="3">Lain-lain</option>
                            </select>
                        </div>
                        @error('id_role')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                            <label for="supplier" class="text-lg">Supplier</label>
                            <select name="id_supplier" id="supplier"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="1">Wings</option>                                
                                <option value="2">Indofood</option>
                                <option value="3">Uniliver</option>
                            </select>
                        </div>
                        @error('id_role')
                            {{ $message }}
                        @enderror
                        <input type="submit" value="Submit"
                            class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                    </form>
                </div>

            </div>

            <!-- Image Section -->
            <div class="w-1/2 shadow-2xl">
                <img class="object-cover w-full h-screen hidden md:block" src="{{ asset('/files/img.jpeg') }}">
            </div>
        </div>

    </div>
@endsection
