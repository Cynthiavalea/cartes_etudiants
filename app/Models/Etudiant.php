<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    function cursus(): BelongsTo
    {
        return $this->belongsTo(Cursus::class, "cursus_id");
    }
}
