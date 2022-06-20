<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EtudiantController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("etudiants.edit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nom" => "bail|required|string|max:200",
            "prenom" => "bail|required|string|max:256",
            "matricule" => "bail|required|string|max:256",
            "cursus_id" => "bail|required|integer",
            "date_de_naissance" => "bail|required|date",
            "telephone" => "bail|required|unique:etudiants|max:26",
            "email" => "bail|required|string|unique:etudiants|max:256",
            "photo" => "bail|image|required|max:1024"
        ]);
        $img_path = $request->photo->store("etudiants");
        Etudiant::create(
            [
                "nom" => $request->nom,
                "prenom" => $request->prenom,
                "email" => $request->email,
                "matricule" => $request->matricule,
                "telephone" => $request->telephone,
                "cursus_id" => $request->cursus_id,
                "date_de_naissance" => $request->date_de_naissance,
                "photo" =>  $img_path
            ]
        );

        return redirect(route("etudiants.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $Etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $Etudiant)
    {
        return view("etudiants.edit");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $Etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {

        return view("etudiants.edit", compact("etudiant"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $Etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $Etudiant)
    {

        $rules = [
            "nom" => "bail|required|string|max:200",
            "prenom" => "bail|required|string|max:256",
            "matricule" => "bail|required|string|max:256",
            "cursus_id" => "bail|required|string|max:256",
            "date_de_naissance" => "bail|required|date",
            "telephone" => "bail|required|max:26",
            "email" => "bail|required|string|max:256"
        ];

        if ($request->has("photo")) {
            $rules["photo"] = "bail|image|required|max:1024";
        }
        $this->validate($request, $rules);
        if ($request->has("photo")) {
            Storage::delete($Etudiant->photo);
            $img_path = $request->photo->store("etudiants");
        }
        $Etudiant->update(
            [
                "nom" => $request->nom,
                "prenom" => $request->prenom,
                "matricule" => $request->matricule,
                "cursus_id" => $request->cursus_id,
                "date_de_naissance" => $request->date_de_naissance,
                "telephone" => $request->telephone,
                "email" => $request->email,
                "photo" =>  isset($img_path) ? $img_path : $Etudiant->photo
            ]
        );
        return redirect(route("etudiants.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $Etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $Etudiant)
    {
        Storage::delete($Etudiant->photo);
        $Etudiant->delete();
        return redirect(route("etudiant.index"));
    }
}
