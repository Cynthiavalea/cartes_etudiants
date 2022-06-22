@extends('layouts.main')

@section("content")
<div id="printCard">
    <div class="bg-slate-900 h-80 mt-16 ml-32 pt-1 font-mono border-black border-1 rounded-xl w-2/4">
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
</div>

<div class="flex">
    <form action="{{  route('send_mail', $etudiant) }}" method="get">
        <input type="hidden" name="email" value="{{ $etudiant->email }}">
        <input type="submit" value="Notifier Etudiant" class="bg-[#1C683F] hover:bg-[#1C683F] btn btn-primary mt-4 ml-80" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
    </form>

    <button type="button" onclick="printCard()" class="bg-[#1C683F] hover:bg-[#1C683F] btn btn-primary mt-4 ml-6" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
        Imprimer la carte
    </button>
</div>

<script>
    function printCard() {
        let carte = document.getElementById("printCard").innerHTML;
        let printer = window.open('', '', 'height=500, width=500');
        printer.document.write('<html>');
        printer.document.write('<body>');
        printer.document.write(carte);
        printer.document.write('</body></html>');
        printer.document.close();
        printer.print();
    }
</script>
@endsection