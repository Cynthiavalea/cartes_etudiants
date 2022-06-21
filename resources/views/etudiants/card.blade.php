@extends('layouts.main')

@section("content")
<div class=" h-80 mt-16 ml-32 pt-1 font-mono border-black border-1 rounded-xl w-2/4">
    <div class="flex h-1/4 w-100">
        <div class="mb-1 w-2/3 text-2xl font-semibold text-[#007436] pl-3">
            Carte Etudiant -- Universite Nazi-Boni
        </div>
        <div class="flex w-1/3 h-20 mb-1 ml-6">
            <img src="{{ asset('images/univbobo.png')}}" alt="logo_universiteBobo" class="relative z-10 inset-0 w-auto h-42 " loading="lazy" />
            <p class="font-semibold text-black text-center p-3">Universite<br> Nazi-Boni</p>
        </div>
    </div>
    <p class="border-1 w-1/3 mb-3 border-black"></p>
    <div class="flex w-100 h-3/4">
        <div class="h-100 w-1/4 mb-1 ml-2 border-black">
            <img src="{{ asset('storage/'. $etudiant->photo)}}" alt="profile_{{$etudiant->nom}}" class="lowercase object-contain " />
        </div>
        <div class="flex-auto pl-6 h-2/3">
            <h1 class="relative text-2xl font-semibold">
                Matricule: {{ $etudiant->matricule}}
            </h1>
            <div class="relative text-lg ">
                Nom: {{$etudiant->nom}}
            </div>
            <div class="relative text-lg  mt-1">
                Prenom: {{$etudiant->prenom}}
            </div>
            <div class="relative text-lg mt-1 capitalize">
                Cycle: {{$etudiant->cursus->filiere}} {{$etudiant->cursus->annee}} annee
            </div>
            <div class="relative  text-lg mt-1">
                Contact: {{$etudiant->telephone}}
            </div>
            <div class="relative  text-lg mt-1">
                Email: {{$etudiant->email}}
            </div>
        </div>
    </div>
</div>
<a href="#" >
    <button type="button" class="bg-[#1C683F] hover:bg-[#1C683F] btn btn-primary mt-4 ml-96" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
        Mailer etudiant
    </button>
</a>

@endsection