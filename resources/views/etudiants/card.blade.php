@extends('layouts.main')

@section("content")
<div class=" h-100 mt-16 pt-6 font-mono border-black border-1 rounded-xl w-2/3">
    <div class="flex h-30 w-full">
        <h1 class="relative flex-none mb-1 text-2xl font-semibold text-[#007436] pl-6">
            Carte Etudiant -- Universite Nazi-Boni
        </h1>
        <div class="flex w-20 mb-1 ml-36 relative z-10 ">
            <img src="{{ asset('images/univbobo.png')}}" alt="logo_universiteBobo" class="relative z-10 inset-0 w-auto h-42 " loading="lazy" />
            <p class="font-semibold text-black text-center p-3">Universite<br> Nazi-Boni</p>
        </div>
    </div>
    <hr class="border-8 pb-1 w-1/4 text-[#007436] mb-3">
    <div class="flex">
        <div class="flex-none w-60 h-full mb-1 relative z-10 ml-2 ">
            <img src="{{ asset('storage/'. $etudiant->photo)}}" alt="profile_{{$etudiant->nom}}" class="z-10 inset-0 w-auto h-3/4 lowercase" loading="lazy" />
        </div>
        <form class="flex-auto pl-6">
            <h1 class="relative w-full flex-none mb-2 text-2xl font-semibold">
                Matricule: {{ $etudiant->matricule}}
            </h1>
            <div class="relative text-lg ">
                Nom: {{$etudiant->nom}}
            </div>
            <div class="relative text-lg  mt-2">
                Prenom: {{$etudiant->prenom}}
            </div>
            <div class="relative text-lg mt-2">
                Cycle: {{$etudiant->cursus_id}}
            </div>
            <div class="relative  text-lg mt-2">
                Contact: {{$etudiant->telephone}}
            </div>
            <div class="relative  text-lg mt-2">
                Email: {{$etudiant->email}}
            </div>
        </form>
    </div>
    <hr class="border-8 pt-1 w-1/4 text-[#007436] mt-3">
</div>
<a href="#" >
    <button type="button" class="bg-[#1C683F] hover:bg-[#1C683F] btn btn-primary mt-4 ml-96" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
        Mailer etudiant
    </button>
</a>

@endsection