<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>tailleurApp</title>
    <!-- Awesome-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <!-- CSS only -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--<link href="resources/css/tapp.css">-->
</head>

<body>


    <!-- Navbar area -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <a class="navbar-brand" href="#">T.App</a>
        <div class="collapse navbar-collapse" id="navbarToggleDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a  href="{{ route('client.index')}}">
                        <button type="button" class="btn btn-success">Accueil</button>
                    </a>&nbsp;
                </li>
                <li class="nav-item">
                    <a href="{{ route('client.create') }}">
                        <button type="button" class="btn btn-success">Ajouter un client</button>
                    </a>&nbsp;  
                </li>
            </ul>
            <form class="d-flex" role="search" action="/search" method="GET">
            {{ csrf_field() }}
                    <input class="form-control me-2" type="search" placeholder="nom, prenom, prix, date_even" aria-label="Search">
                    <button class="btn btn-success" type="submit">Rechercher</button>
            </form>
            
        </div>
    </div>
    </nav>
</header>
<!-- Navbar Area End -->


<!-- Body-content -->
<section>
    
@yield('content')
</section>




<!-- Footer -->
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>