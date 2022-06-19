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
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
            <tr>
                <th scope="row"> <a href="{{ route('etudiants.show', $etudiant) }}" class="question_content">$etudiant->photo</a></th>
                <td>$etudiant->Matricule</td>
                <td>$etudiant->nom</td>
                <td>$etudiant->prenom</td>
                <td>$etudiant->cursus_id</td>
                <td>$etudiant->telephone</td>
                <td>$etudiant->email</td>
                <td>$etudiant->date_de_naissance</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection