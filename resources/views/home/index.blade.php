@extends('layouts.main')

@section('content')
<div class="grid gap-x-8 grid-cols-3 justify-center h-screen ">

    <div class="h-12 rounded-t-lg">
        <table class="table-fixed border-collapse border border-slate-500 bg-white rounded-t-xl">
            <thead class="">
                <tr class="bg-yellow-500 text-white rounded-t-xl">
                    <th class="rounded-t-xl py-3 w-full">Dernier(e)s Secretaires ajouter</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="h-12 rounded-t-lg">
        <table class="table-fixed border-collapse border border-slate-500 bg-white rounded-t-xl">
            <thead class="">
                <tr class="bg-yellow-500 text-white rounded-tr-xl">
                    <th class="rounded-tl-xl p-3">Song</th>
                    <th>Artist</th>
                    <th class="rounded-tr-xl  p-3">Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                    <td>Malcolm Lockyer</td>
                    <td>1961</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection