@extends('layouts.app')


@section ('contenu')
<div class="container">
    <table class="table table-primary table-striped">
         <div class="card-header bg-info text-white">LISTE DES CANDIDATS</div>
        <tr>
            <th>id</th> <br>
            <th>nom</th>
            <th>prenom</th>
            <th>etablissement</th>
            <th>filiere</th>
            <th>niveau</th>
        </tr>
        @foreach($candidat as $candidats)
        <tr>
            <td>{{$candidats->id}}</td>
            <td>{{$candidats->nom}}</td>
            <td>{{$candidats->prenom}}</td>
            <td>{{$candidats->etablissement}}</td>
            <td>{{$candidats->filiere}}</td>
            <td>{{$candidats->niveau}}</td>
        </tr>
        @endforeach

    </table>
   </div>
@endsection