@extends('layouts.template',[])
@section('title', 'Edit User')

@section('content')





    <div class="class="bg-white font-family-karla h-screen"">
        <div class="w-full flex flex-wrap">
            <!-- Login Section -->
            <div class="w-full md:w-1/2 flex flex-col">
                <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                    <p class="text-center text-3xl">Buat User</p>
                    <form class="flex flex-col pt-3 md:pt-8" action="{{ route('adminEditUser',['id' => $data->id]) }} " method="post">
                        @csrf
                        <div class="flex flex-col pt-4">
                            <label for="nama" class="text-lg">Name</label>
                            <input type="text" id="nama" name="nama" placeholder="Nama anda" value="{{ $data->nama }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
                        @error('nama')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                            <label for="telp" class="text-lg">No Telpon</label>
                            <input type="number" name="telp" id="telp" placeholder="No Telpon" value="{{ $data->telp }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        @error('telp')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                            <label for="email" class="text-lg">Email</label>
                            <input type="email" name="email" id="email" placeholder="emailAnda@email.com" value="{{ $data->email }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        @error('email')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                            <label for="password" class="text-lg">Password</label>
                            <input type="password" name="password" id="password"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        @error('password')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                            <label for="role" class="text-lg">Role</label>
                            <select name="id_role" id="id_role"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="2">Gudang</option>
                                <option value="3">Kasir</option>
                            </select>
                        </div>
                        @error('id_role')
                            {{ $message }}
                        @enderror
                        <div class="flex flex-col pt-4">
                          <label for="role" class="text-lg">Role</label>
                          <select name="id_role" id="status"
                              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                              <option value="1">Active</option>
                              <option value="0">Not Active</option>
                          </select>
                      </div>
                      @error('status')
                          {{ $message }}
                      @enderror
                        <input type="submit" value="Ubah"
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
