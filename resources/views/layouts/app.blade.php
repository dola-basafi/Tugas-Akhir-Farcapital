
@extends('layouts.template')


@push('livewireStyle')
@livewireStyles
@endpush




@section('content')
    {{ $slot }}
@endsection
@push('livewireScript')
@livewireScripts
@endpush
@push('alpineScript')
<script defer src="{{ asset('/files/alpine.js') }}" defer></script>
@endpush

