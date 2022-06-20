<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $etudiants = Etudiant::latest()->take(5)->get();
        $users = User::latest()->take(5)->get();
        return view('home.index', compact(["etudiants", "users"]));
    }

}
