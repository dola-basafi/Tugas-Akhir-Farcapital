<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    {{-- cdn --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="{{ asset('/files/tailwind.js') }}"></script>
    @stack('livewireStyle')
</head>

<body>
    {{-- test --}}
    @if ($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <div>
      @auth
        @include('layouts.navbar')      
      @endauth

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900"> @yield('title')</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <!-- Replace with your content -->

                <div class="px-4 py-6 sm:px-0">
                    <div class=" rounded-lg border-4 border-dashed border-gray-200">
                        @yield('content')
                    </div>
                </div>
                <!-- /End replace -->
            </div>
        </main>
    </div>








    @stack('alpineScript')
    @stack('livewireScript')



    <script>
        function showHideProfil() {
            document.getElementById("dropDown").classList.toggle('hidden');
        }

        function showHideNavbarMenu() {
            document.getElementById("navMenu").classList.toggle('hidden');
        }
    </script>
</body>

</html>
