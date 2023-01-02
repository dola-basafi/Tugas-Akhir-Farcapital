@section('title', 'Transaksi')
<div  x-data>
    <div class=" flex items-center justify-center" style="background: #edf2f7;">
        <section class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white text-center">Data
                    Barang</h1>
                <div   class=" grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                    {{-- @dd($data) --}}
                    @foreach ($data as $item)
                        <div class="lg:flex bg-gradient-to-r from-green-400 to-blue-500" >
                            <img class="object-scale-down w-full h-56 rounded-full lg:w-64" src="{{ $item->gambar }}"
                                alt="">
                            <div class="flex flex-col justify-between py-6 lg:mx-6">
                                <p class="text-xl font-semibold text-gray-800  dark:text-white ">
                                    Nama : {{ $item->nama }}
                                </p>
                                <p class="text-xl font-semibold text-gray-800  dark:text-white ">
                                    Harga : {{ $item->harga }}
                                </p>
                                <p class="text-xl font-semibold text-gray-800  dark:text-white ">
                              a      Stok : {{ $item->stok }} {{ $item->satuan }}
                                </p>
                                <span class="text-sm text-white-500 dark:text-gray-300">Kategori:
                                    {{ $item->kategori->nama }} </span>
                                <button  x-on:click="$wire.addTransaksi({{ $item->id }},'{{ $item->nama }}',{{ $item->harga }})" class="bg-white">tambah </button>
                            </div>
                        </div>
                    @endforeach
                    {{-- <p x-text="$wire.transaksi[14]"></p>
                    <p x-text="$wire.total"></p> --}}
                    {{-- <p x-text="modal"></p> --}}
                    
                         @foreach ($this->transaksi as $key => $value) 
                    {{$value[0]}}
                    {{-- @dd($value[0]) --}}
                       {{-- <p >{{$key}}</p> --}}
                   @endforeach
                        <button wire:click="submit">Submit</button>
                </div>
            </div>
        </section>
    </div>


    {{-- modal    --}}
    {{-- @dd($transaksi) --}}
    <main x-show=false  id="content" role="main" class=" overflow-y-auto top-20   max-w-md mx-auto p-6 fixed inset-0">
        <div class="mt-7 bg-white  rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 sm:p-7">
                <div class="mt-5">
                    <form>
                        <div class="grid gap-y-4">
                            {{-- <template x-for="item in $wire.transaksi"> --}}
                                {{-- @foreach ($this->transaksi as $key => $value) --}}
                                {{-- <p x-text="item[0]"></p> --}}
                                {{-- <div>
                                    <div class="relative flex">
                                        <label for="email" class=" text-sm font-bold ml-1 mb-2 dark:text-white">Email
                                            address</label>
                                        <input type="text" id="email" name="email" wire:model='transaksi.{{ $key }}'
                                            class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                                            required aria-describedby="email-error">
                                    </div>                                --}}
                                {{-- </div> --}}
                                {{-- @endforeach --}}
                            {{-- </template> --}}
                            <button type="submit"
                                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Reset
                                password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>