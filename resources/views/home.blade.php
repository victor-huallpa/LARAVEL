
{{-- forma de agragar contenido mediante componenetes de blade --}}
{{-- <x-app-layout> --}}
    {{-- <div class="max-w-4xl mx-auto py-4">
        <h1>Bienvenido a la pagina principal</h1>
        <x-alert type="danger" class="mb-4">
            <x-slot name="title">
                Alerta
            </x-slot>
            Contenido de la alerta
        </x-alert>
    
        <p>hola</p>
    </div>
     --}}
{{-- </x-app-layout> --}}
@extends('layouts.app')

@section('titulo')
    HOME
    
@endsection


{{-- section es para agregar contenido a un yeald --}}
@section('content')
<div class="max-w-4xl mx-auto py-4">
    <h1>Bienvenido a la pagina principal</h1>
    <x-alert type="danger" class="mb-4">
        <x-slot name="title">
            Alerta
        </x-slot>
        Contenido de la alerta
    </x-alert>

    <p>hola</p>
</div>

@endsection

{{-- push es apra agregar contenido a un stack --}}
@push('styles')
    <style>
        body {
            background-color: #8b9cbd;
        }
    </style>
    
@endpush


