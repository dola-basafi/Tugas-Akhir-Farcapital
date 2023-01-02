@extends('layouts.template')
@section('title', 'Profil')
@section('content')
<div class="class="bg-white font-family-karla h-screen"">
    {{-- @dd($user) --}}
    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">
            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Profile</p>
                <form class="flex flex-col pt-3 md:pt-8" action="{{ route('profil') }} " method="post">
                    @csrf
                    <div class="flex flex-col pt-4">
                        <label for="nama" class="text-lg">Nama</label>
                        <input value="{{$user->nama}}" type="text" id="nama" name="nama"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>
                    @error('nama')  {{ $message }}   @enderror
                    <div class="flex flex-col pt-4">
                        <label for="telp" class="text-lg">No Telpon</label>
                        <input value="{{$user->telp}}" type="number" name="telp"  id="telp" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    @error('telp') {{ $message }} @enderror
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Email</label>
                        <input value="{{$user->email}}" type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    @error('email') {{ $message }} @enderror
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    @error('password') {{ $message }} @enderror
                    <input type="submit" value="Ubah" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>sudah punya akun ? <a href="register.html" class="underline font-semibold">Masuk disini</a></p>
                </div>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="{{asset('/files/img.jpeg')}}">
        </div>
    </div>

</div>
    
@endsection