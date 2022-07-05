@extends("layouts.main")
@section("content")

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('root') }}">
                <img class="w-40 h-40" src="{{  secure_asset('images/univbobo.png') }}" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        @if (isset($etudiant))
        <form action="{{ route('etudiants.update', $etudiant) }}" method="POST" enctype="multipart/form-data">
            @method("PUT")
            @else
            <form action="{{ route('etudiants.store') }}" method="POST" enctype="multipart/form-data">
                @endif
                @csrf
                <!-- Photo -->
                <div>
                    <x-label for="photo" :value="__('Photo')" />

                    <input id="photo" class="block rounded mt-1 w-full border-gray-300 border-2" type="file" name="photo" value="{{ isset($etudiant) ? $etudiant->photo : old('photo') }}"/>
                </div>

                <!-- Matricule -->
                <div>
                    <x-label for="matricule" :value="__('Matricule')" />

                    <input id="matricule" class="block rounded mt-1 w-full border-gray-300" type="text" name="matricule" value="{{ isset($etudiant) ? $etudiant->matricule : old('matricule') }}" required />
                </div>


                <!-- Nom -->
                <div>
                    <x-label for="nom" :value="__('Nom')" />

                    <input id="nom" class="block rounded mt-1 w-full border-gray-300" type="text" name="nom" value="{{ isset($etudiant) ? $etudiant->nom : old('nom') }}" required />
                </div>

                <!-- Prenom -->
                <div>
                    <x-label for="prenom" :value="__('Prenom')" />

                    <input id="prenom" class="block rounded mt-1 w-full border-gray-300" type="text" name="prenom" value="{{ isset($etudiant) ? $etudiant->prenom : old('prenom') }}" required />
                </div>

                <!-- Date de Naissance -->
                <div>
                    <x-label for="date_de_naissance" :value="__('Date de Naissance')" />

                    <input id="date_de_naissance" class="block rounded mt-1 w-full border-gray-300" type="date" name="date_de_naissance" value="{{ isset($etudiant) ? $etudiant->date_de_naissance : old('date_de_naissance') }}" required />
                </div>

                <!-- Filiere -->
                <div>
                    <x-label for="cursus_id" :value="__('Filiere')" />

                    <select id="cursus_id" class="block rounded mt-1 w-full border-gray-300" name="cursus_id" value="{{ isset($etudiant) ? $etudiant->cursus_id : old('cursus_id') }}" required>
                        <option value="1" selected>Informatique(1)</option>
                    </select>
                </div>

                <!-- Telephone -->
                <div>
                    <x-label for="telephone" :value="__('Telephone')" />

                    <input id="telephone" class="block rounded mt-1 w-full border-gray-300" type="text" name="telephone" value="{{ isset($etudiant) ? $etudiant->telephone : old('telephone') }}" required />
                </div>


                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <input id="email" class="block rounded mt-1 w-full border-gray-300" type="email" name="email" value="{{ isset($etudiant) ? $etudiant->email : old('email') }}" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4">
                        {{ __('Ajouter') }}
                    </x-button>
                </div>
            </form>
    </x-auth-card>
</x-guest-layout>
@endsection