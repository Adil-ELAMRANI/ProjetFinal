@extends('layouts.app-noNav')

@section('title', 'Welcome')

@section('content')
    <section class="bg-card p-5 flex flex-col justify-center items-center">
        <header class="flex flex-col justify-center items-center py-10 gap-4">
            <img src="{{ asset('images/logo_vino.png') }}" class="w-32" alt="Logo Vino">
            <h1 class="text-text-body">Gérer vos celliers, simplement</h1>
        </header>
        <div id='authForm' class="w-full flex flex-col">
         <div class="flex w-full">
            <button class="flex-1 font-bold text-lg text-neutral-700 border-b border-neutral-700 text-center py-2">
                Connexion
            </button>
            <button class="flex-1 font-bold text-lg text-neutral-700 border-b border-neutral-700 text-center py-2">
                S'inscrire
            </button>
        </div>
        <x-form-login />
        <x-form-register />
        <div>
    </section>    
@endsection