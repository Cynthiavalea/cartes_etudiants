<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }
    public function store()
    {
        return view('home.index');
    }
    public function create()
    {
        return view('home.index');
    }
    public function destroy()
    {
        return view('home.index');
    }
    public function update()
    {
        return view('home.index');
    }
    public function edit()
    {
        return view('home.index');
    }

    public function index()
    {
        return view('etudiants.index');
    }

    public function card(){
        return view('etudiants.card')
    }

}
