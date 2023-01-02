@extends('layouts.template')
@section('title', 'Transaksi')
@section('content')
    <main x-show=false id="content" role="main" class=" overflow-y-auto top-20   max-w-md mx-auto p-6 fixed inset-0">
        <div class="mt-7 bg-white  rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 sm:p-7">
                <div class="mt-5">
                  <div class="relative flex">
                    <label for="brg" class=" text-sm font-bold ml-1 mb-2 dark:text-white">Kode
                        Barang</label>
                    <input type="text" id="brg" 
                        class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                        required aria-describedby="email-error">
                    <label for="brg" class=" text-sm font-bold ml-1 mb-2 dark:text-white">Jumlah</label>
                    <input type="text" id="jumlah" 
                        class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                        required aria-describedby="email-error">


                        <button onclick="tambah()"
                        class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">TAMBAH
                    </button>
                </div>
                    <form >
                        <div class="grid gap-y-4" >
                          <table>
                            <thead>
                              <tr>
                                <th>kode</th>
                                <th>jumlah</th>
                              </tr>
                            </thead>
                            <tbody id="daftar_belanja">

                            </tbody>
                          </table>
                           
                            <button type="submit"
                                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
    </main>
    <script>
        function tambah() {
            const h2 = document.getElementById("daftar_belanja");
            let kode = document.getElementById("brg").value;
            let jumlah = document.getElementById('jumlah').value;
            let html = `

            <tr>
          <td>
            <input type="text" id="email" name="${kode}[]"
            class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                                        disabled value="${kode}" aria-describedby="email-error">
            </td>
            <td>
              <input type="text" id="email" name="${kode}[]"
                                        class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm"
                                        disabled value="${jumlah}" aria-describedby="email-error">
              </td>
        </tr>               

    `;
            h2.insertAdjacentHTML("afterend", html);
        }
    </script>
@endsection
