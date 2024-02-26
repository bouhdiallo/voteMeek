
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>GESTION VOTE</title>

    <style>
        /* CSS personnalisé pour l'image */
        .jumbotron {
            background-image: url('{{ asset("WhatsApp Image 2024-02-23 à 15.42.14_c9bfdacf.jpg") }}');
            background-size: cover;
            background-position: center;
            height: 50vh; /* Hauteur relative à 50% de la hauteur de l'écran */
            margin-bottom: 0; /* Supprime la marge inférieure */
        }
    </style>
</head> 
<body> 
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Mouvement des élèves et étudiants de Kabatoki (MEEK)</a>
            {{-- <form action="{{ route('ajouter.vote') }}" method="GET">
                @csrf
                <button type="submit">VOTER</button>
            </form> --}}

            <form action="{{route('vote')}}" method="GET">
                @csrf
                <button type="submit">VOTER</button>
            </form>
            

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Vos éléments de menu ici -->
                </ul>
                <span class="navbar-text">
                    {{-- Bienvenue {{ auth()->user()->name}} --}}
                </span>
                {{-- <form class="d-flex">
                  @csrf
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}

                <a href="#">
                    <form action="{{ route('logout') }}" method="post">@csrf</form>
                    Se déconnecter
                </a>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <!-- Image en haut avec une certaine hauteur -->
    </div>  <br><br>

    <!-- Votre contenu ici -->



<h1>Presentation / historique</h1>



<h3>Lorem Ipsum est tout simplement un faux texte de l’industrie de l’imprimerie et de la composition. Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galerie de caractères et l'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi au saut vers la composition électronique, restant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker incluant des versions de Lorem Ipsum.</h3> <br> <br>

<h1>objectifs du mouvement</h1>
<h3>Lorem Ipsum est tout simplement un faux texte de l’industrie de l’imprimerie et de la composition. Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galerie de caractères et l'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi au saut vers la composition électronique, restant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker incluant des versions de Lorem Ipsum.</h3> <br> <br>

<h1>realisation et activites</h1>
<h3>Lorem Ipsum est tout simplement un faux texte de l’industrie de l’imprimerie et de la composition. Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galerie de caractères et l'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi au saut vers la composition électronique, restant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker incluant des versions de Lorem Ipsum.</h3>
</div>
</div> <br> <br>

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

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>