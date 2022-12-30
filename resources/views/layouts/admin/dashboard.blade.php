@extends('layouts.template')
@section('title','Admin Dashboard')
@section('content')
    {{-- {{count($data) ? $data :'data tidak di temukan'}} --}}
    
    @foreach ($data as $a)
    {{$a}}
    @endforeach

    {{$data->links()}}
@endsection    
