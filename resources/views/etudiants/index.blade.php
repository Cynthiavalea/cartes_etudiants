@extends("layouts.main")

@section("content")


<div class="QA_table mb_30 bg-slate-50 h-full">

    <table class="table display" id="my_table">
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
                <td><a href="{{ route('etudiants.show', $etudiant) }}"><img class="w-7 h-7 rounded-full" src="{{ asset('storage/'. $etudiant->photo)}}" alt="profile_{{ $etudiant->nom}}" /> </a></td>
                <td>{{$etudiant->matricule}}</td>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->prenom}}</td>
                <td class="capitalize">{{$etudiant->cursus->filiere}} {{$etudiant->cursus->annee}}</td>
                <td>{{$etudiant->telephone}}</td>
                <td>{{$etudiant->email}}</td>
                <td>{{$etudiant->date_de_naissance}}</td>
                <td><a href="{{ route('etudiants.show', $etudiant) }}"><i class="icofont-print" style="color:#1C683F ;"></i></a></td>
                @if( Auth::user()->role->type == 'directeur')
                <td><a href="{{ route('etudiants.edit', $etudiant) }}"><i class="icofont-edit" style="color:#F3CE1B;"></i></a></td>
                <td>
                    <i class="icofont-trash" style="color:red;">
                        <form action="{{ route('etudiants.destroy', $etudiant) }}" method="post" onsubmit="return cnf()">
                            @csrf
                            @method("DELETE")
                            <input type="hidden" value="submit" class="sup">
                        </form>
                    </i>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#my_table').DataTable();
    });

    function cnf() {
        let ret = confirm("Voulez vous retirer cet etudiant de la liste ? ");
        if (ret) {
            return true;
        }
        return false;
    }
</script>

@endsection