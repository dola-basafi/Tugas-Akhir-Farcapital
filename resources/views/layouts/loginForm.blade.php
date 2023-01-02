@extends('layouts.template')
@section('title', 'login')
@section('content')
<div class="class="bg-white font-family-karla h-screen"">

    

        <!-- Login Section -->
        <div class="w-full flex flex-col">
            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Selamat Datang.</p>
                <form class="flex flex-col pt-3 md:pt-8" action="{{ route('login') }} " method="post">
                    @csrf                   
                    <div class="flex flex-col pt-4">
                        <label for="telp" class="text-lg">No Telpon</label>
                        <input type="number" name="telp"  id="telp" placeholder="No Telpon" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    @error('telp') {{ $message }} @enderror                   
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    @error('password') {{ $message }} @enderror
                    <input type="submit" value="Login" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>belum punya akun ? <a href="register.html" class="underline font-semibold">Daftar disini</a></p>
                </div>
            </div>
        </div>

        <!-- Image Section -->
       
    

</div>
@endsection
