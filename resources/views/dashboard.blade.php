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
          <a class="navbar-brand text-white" href="#">Mouvement des eleves et etudiants de kabatoki(MEEK)</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              

               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  GESTION ELECTEUR
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Ajouter</a></li>
                  <li><a class="dropdown-item" href="#">liste</a></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                </ul>
              </li> 

                 

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                    GESTION CANDIDAT
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  {{-- <li><a class="dropdown-item" href="/ajouter/Candidat">Ajouter</a></li> --}}
                  <li><a class="dropdown-item" href="/liste/Candidat">Liste </a></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                </ul>
              </li>





              
            </ul>
            Bienvenue <h1>{{auth()->user()->name}}</h1> 
            <a href="#"  onclick="document.getElementById('logout-form').submit()">


              <form  action="{{ route('logout')}}" method="POST">@csrf</form>
                     Se deconnecter
            </a>

            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
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




<div class="jumbotron text-center">
    <h1>GESTION VOTE</h1>
    <h3>Lorem Ipsum est tout simplement un faux texte de l’industrie de l’imprimerie et de la composition. Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galerie de caractères et l'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi au saut vers la composition électronique, restant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker incluant des versions de Lorem Ipsum.</h3>
    <a class="btn btn-info" href="/ajouter/vote">VOTER</a>
</div>
    
{{-- @endsection --}}