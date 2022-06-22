@extends('layouts.main')
@section('content')
<x-guest-layout class="w-full">
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('root') }}">
                <img class="w-40 h-40" src="{{ asset('images/univbobo.png') }}" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('root') }}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <!-- Photo -->
            <div>
                <x-label for="photo" :value="__('Photo')" />

                <x-input id="photo" class="block mt-1 w-full rounded border-2" type="file" name="photo" value="{{ $user->photo }}" required />
                    <img src="{{asset('storage/'. $user->photo) }}" class="w-40 h-40">
                </x-input>
            </div>

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}" required />
            </div>

            <!-- LastName -->
            <div>
                <x-label for="last_name" :value="__('Prenom')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" value="{{ $user->last_name }}" required />
            </div>

            <!-- UserName -->
            <div>
                <x-label for="user_name" :value="__('Nom d\'Utilisateur')" />

                <x-input id="user_name" class="block mt-1 w-full" type="text" name="user_name" value="{{ $user->user_name }}" required />
            </div>

            <!-- Role -->
            <div>
                <x-label for="role_id" :value="__('Role')" />

                <select id="role_id" class="block mt-1 w-full rounded" name="role_id" value="" required>
                    <option value="2" selected>Secretaire</option>
                </select>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Mettre a jour les donnees') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection