@extends('layouts.app')


@section ('contenu')
<div class="container">
    <table class="table table-primary table-striped">
         <div class="card-header bg-info text-white">LISTE DES VOTANTS</div>
        <tr>
            <th>id</th> <br>
            <th>nom</th>
            <th>prenom</th>
            <th>etablissement</th>
            <th>candidat</th>
        </tr>
        @foreach($vote as $votes)
        <tr>
            <td>{{$votes->id}}</td>
            <td>{{$votes->nom}}</td>
            <td>{{$votes->prenom}}</td>
            <td>{{$votes->etablissement}}</td>
            <td>{{$votes->candidat->nom}}</td>
        </tr>
        @endforeach

    </table>
   </div>
@endsection