@extends('layouts.template')
@section('title', 'Admin Create User')
@section('content')

    <div class=" flex items-center justify-center" style="background: #edf2f7;">

        <section class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog</h1>

                <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                    @foreach ($data as $item)
                        <div class="lg:flex bg-gradient-to-r from-green-400 to-blue-500">
                            <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                                src="{{$item->gambar}}"
                                alt="">
                            <div class="flex flex-col justify-between py-6 lg:mx-6">                                
                                <p  class="text-xl font-semibold text-gray-800  dark:text-white ">
                                  Nama : {{$item->nama}}
                                </p>
                                <p  class="text-xl font-semibold text-gray-800  dark:text-white ">
                                  Harga : {{$item->harga}}
                                </p>
                                <p  class="text-xl font-semibold text-gray-800  dark:text-white ">
                                  Stok : {{$item->stok}} {{$item->satuan}}
                                </p>
                                <span class="text-sm text-white-500 dark:text-gray-300">Kategori: {{$item->kategori->nama}} </span>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </section>
    </div>


@endsection
