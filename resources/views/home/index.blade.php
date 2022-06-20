@extends('layouts.main')

@section('content')
<div class="grid gap-x-8 grid-cols-3 justify-center h-screen w-full">

    <div class="h-12 rounded-t-lg w-full">
        <table class="table-fixed border-collapse border border-slate-500 bg-white rounded-t-xl">
            <thead class="">
                <tr class="bg-yellow-500 text-white rounded-t-xl">
                    <th class="rounded-t-xl py-3 w-full  text-center">Dernier(e)s Secretaires ajouter</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                @unless($user->role == 'secretaire')
                <tr class="w-full">
                    <td class="flex "> <img src="{{asset('storage/'. $user->photo)}}" class="w-10 h-10 m-2 rounded-full" alt="">
                        <p class="flex text-black font-semibold p-3"> {{$user->name}} @_{{$user->user_name}} <span class="font-mono font-normal"> ({{ $user->role->type}})</span></p>
                    </td>
                </tr>
                @endunless
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="h-24 rounded-t-lg w-full">
        <table class="table-fixed border-collapse border border-slate-500 bg-white rounded-t-xl w-full">
            <thead class="">
                <tr class="bg-yellow-500 text-white rounded-t-xl">
                    <th class="rounded-t-xl py-3 w-full  text-center">Dernier(e)s Etudiants ajouter</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $etudiant)
                <tr class="w-full">
                    <td class="flex "> <img src="{{asset('storage/'. $etudiant->photo)}}" class="w-10 h-10 m-2 rounded-full" alt="">
                        <p class="flex text-black font-semibold p-3"> {{$etudiant->matricule}} {{$etudiant->nom}} {{$etudiant->prenom}} </p>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection