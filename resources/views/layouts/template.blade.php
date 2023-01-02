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
      <nav class="bg-gray-800 sticky top-0 ">
          <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
              <div class="relative flex h-16 items-center justify-between">
                  <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                      <!-- Mobile menu button-->
                      <button onclick="showHideNavbarMenu()" type="button"
                          class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                          aria-controls="mobile-menu" aria-expanded="false">
                          <span class="sr-only">Open main menu</span>
                          <!--
                  Icon when menu is closed.
      
                  Heroicon name: outline/bars-3
      
                  Menu open: "hidden", Menu closed: "block"
                -->
                          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>
                          <!--
                  Icon when menu is open.
      
                  Heroicon name: outline/x-mark
      
                  Menu open: "block", Menu closed: "hidden"
                -->
                          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                      </button>
                  </div>
                  <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                      <div class="flex flex-shrink-0 items-center">
                          <img class="block h-8 w-auto lg:hidden"
                              src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                              alt="Your Company">
                          <img class="hidden h-8 w-auto lg:block"
                              src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                              alt="Your Company">
                      </div>
                      <div class="hidden sm:ml-6 sm:block">
                          <div class="flex space-x-4">
                              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                              <a href="{{$dashboard ?? '#'}}"
                                  class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                                  aria-current="page">Dashboard</a>

                              <a href="{{$create ?? '#'}}"
                                  class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

                             
                      </div>
                  </div>
                  <div
                      class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                      <button type="button"
                          class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                          <span class="sr-only">View notifications</span>
                          <!-- Heroicon name: outline/bell -->
                          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                          </svg>
                      </button>
                      <!-- Profile dropdown -->
                      <div class="relative ml-3">
                          <div>
                              <button type="button" onclick="showHideProfil()"
                                  class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                  id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                  <span class="sr-only">Open user menu</span>
                                  <img class="h-8 w-8 rounded-full"
                                      src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                      alt="">
                              </button>
                          </div>
                          <div id="dropDown"
                              class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                              role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                              tabindex="-1">
                              <!-- Active: "bg-gray-100", Not Active: "" -->
                              <a href="{{route('profil')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                  tabindex="-1" id="user-menu-item-0">Your Profile</a>                              
                              <a href="/logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                  tabindex="-1" id="user-menu-item-2">Sign out</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Mobile menu, show/hide based on menu state. -->
          <div id="navMenu" class="hidden" id="mobile-menu">
              <div class="space-y-1 px-2 pt-2 pb-3">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="{{$dashboard ?? '#'}}" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                      aria-current="page">Dashboard</a>

                  <a href="{{  $create ??'#'}}"
                      class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Create</a>

                  {{-- <a href="#"
                      class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                  <a href="#"
                      class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a> --}}
              </div>
          </div>
      </nav>          
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
