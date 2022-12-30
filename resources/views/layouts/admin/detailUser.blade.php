@extends('layouts.template')
@section('title','Admin Dashboard')
@section('content')
    {{$data ? $data :'data tidak di temukan'}}
@endsection    
