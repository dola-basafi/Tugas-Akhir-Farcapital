@extends('layouts.template')
@section('title','Admin Dashboard')
@section('content')
    {{count($data) ? $data :'data tidak di temukan'}}
@endsection    
