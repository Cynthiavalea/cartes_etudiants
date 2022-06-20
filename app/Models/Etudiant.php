<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "prenom",
        "date_de_naissance",
        "telephone",
        "photo",
        "email",
        "cursus_id",
        "matricule"
    ];

    function cursus()
    {
        return $this->belongsTo(Cursus::class, "cursus_id");
    }
}
