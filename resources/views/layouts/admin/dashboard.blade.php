@extends('layouts.template')

@section('title', 'Admin Dashboard')
@section('content')
    {{-- {{count($data) ? $data :'data tidak di temukan'}} --}}
   

    <!-- component -->
<table class="w-full">
    <tr class="w-1/2 bg-indigo-300">
        <th class="p-2 text-center ">Nama</th>
        <th class="p-2 text-center">Email</th>
        <th class="p-2 text-center ">id_role</th>
        <th class="p-2 text-center ">active</th>
        <th class="p-2 text-center ">action</th>
    </tr>
    @foreach ($data as $user)
    <tr class="">
        <td class="p-2 text-center">{{$user->nama}}</td>
        <td class="p-2 text-center text-green-600">{{$user->email}}</td>
        <td class="p-2 pr-4 text-center">{{$user->id_role}}</td>
        <td class="text-center">
            <input disabled class="my-auto" {{$user->status? 'checked':''}} checked type="checkbox"/>
        </td>
        <td class="text-center"> 
            <a href="{{ route('adminEditUserForm',['id' => $user->id]) }}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</button></a>
            <a href="{{ route('adminDeleteUser',['id' => $user->id]) }}"><button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Delete</button></a>
        </td>
    </tr>
    @endforeach
</table>
    {{ $data->links() }}
@endsection
