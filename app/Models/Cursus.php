<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursus extends Model
{
    use HasFactory;
    function student(): HasMany
    {
        return $this->hasMany(Etudiant::class);
    }
}
