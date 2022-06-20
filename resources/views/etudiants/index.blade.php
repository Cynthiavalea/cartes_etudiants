@extends("layouts.main")

@section("content")


<div class="QA_table mb_30">

    <table class="table lms_table_active">
        <thead>
            <tr>
                <th scope="col">Profile</th>
                <th scope="col">Matricule</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Cursus</th>
                <th scope="col">Telephone</th>
                <th scope="col">Email</th>
                <th scope="col">Date de Naissance</th>
                <th colspan="3">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
            <tr>
                <td><a href="{{ route('etudiants.show', $etudiant) }}"><img class="w-30 h-30" src="{{ asset('storage/'. $etudiant->photo)}}" alt="profile_{{ $etudiant->nom}}"/> </a></td>
                <td>{{$etudiant->matricule}}</td>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->prenom}}</td>
                <td>{{$etudiant->cursus_id}}</td>
                <td>{{$etudiant->telephone}}</td>
                <td>{{$etudiant->email}}</td>
                <td>{{$etudiant->date_de_naissance}}</td>
                <td><i class="icofont-print"></i></td>
                <td><i class="icofont-edit"></i></td>
                <td><i class="icofont-trash"></i></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection