<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    {{-- cdn --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="{{asset('/files/script.js')}}"></script>
</head>

<body>
    {{-- test --}}
    @if ($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <a href="/logout"><button>
            <h1>LOG OUT</h1>
        </button></a><br><br>
    @yield('content')
</body>

</html>
