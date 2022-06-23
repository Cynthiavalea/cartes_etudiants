<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\User;
use App\Mail\MailSender;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {
        $etudiants = Etudiant::latest()->take(5)->get();
        $users = User::latest()->take(5)->get();
        return view('home.index', compact(["etudiants", "users"]));
    }

    public function secretaire()
    {
        $users = User::all();
        return view('users.index', compact("users"));
    }

    public function update_profile(User $user)
    {
        return view('users.update_profile', compact("user"));
    }

    function sendMail(Request $request) {
       
        Mail::to($request->email)->send(new MailSender());
        return redirect(route('root'))->with("succes", "Etudiant Notifier");
    }


}
