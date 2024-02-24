{{-- @extends('layouts.app')

@section('contenu') --}}





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>GESTION VOTE</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">MEEK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
             

              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  GESTION ELECTEUR
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Ajouter</a></li>
                  <li><a class="dropdown-item" href="#">liste</a></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                {{-- </ul> --}}
              {{-- </li>  --}} 

                 
{{-- 
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                    GESTION CANDIDAT
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  {{-- <li><a class="dropdown-item" href="/ajouter/Candidat">Ajouter</a></li> --}}
                  {{-- <li><a class="dropdown-item" href="/liste/Candidat">Liste </a></li> --}}
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                {{-- </ul>
              </li>  --}}





              
            </ul>
            <form class="d-flex">
              <span class="navbar-text">
                {{-- {{ auth()->user()->name }} --}}
            </span>
              {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button> --}}
              
            </form>
          </div>
        </div>
      </nav>
       <div>
        @yield('contenu')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>




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







 <div class="container">
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{session ('success') }}
    </div>
    @endif
 </div>

<form action="{{ route('voter.vote') }}"  method="post">

@csrf
    {{-- <div class="container">
         <div class="card-header bg-info text-center  text-white">Ajouter un candidat</div>  <br>
    <div class="col-md-4">  --}}
      <label for="validationCustom01" class="form-label" >Nom</label>
      <input type="text" class="form-control" id="validationCustom01" name="nom">
      <div class="valid-feedback">
        Looks good!
      </div> 
    </div><br> <br><br>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label" >Prenom</label>
      <input type="text" class="form-control" id="validationCustom02" name="prenom" value="Otto" required>
     <div class="valid-feedback">
        Looks good!
      </div>
       <br> <br>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label" >Etablissement</label>
        <input type="text" class="form-control" id="validationCustom02" name="etablissement" value="Otto" required>
        <div class="valid-feedback">
          Looks good!
        </div>
    </div>   <br> <br>
   <div class="col-md-3">
    <label for="exampleSelect1" class="form-label mt-4">Example select</label>
    <select class="form-select" id="exampleSelect1" name="candidat_id">
        @foreach ($candidat as $candidats)
        <option value="{{$candidats->id}}">{{$candidats->nom}}</option>
        @endforeach
      </select>
    </div>
    </div>  <br> <br>
   
    <div class="col-12">
      <button class="btn btn-primary" type="submit" text-center>soumettre mon vote</button>
    </div>
  </form>
</div>





{{-- @endsection --}}



<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
          <!-- Les icônes des réseaux sociaux -->
      </section>
      <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #083B32;">
      © 2024 Copyright:
      <a class="text-white" href="">Mouvement des eleves et etudiants de kabatoki</a>
  </div>
  <!-- Copyright -->
</footer>