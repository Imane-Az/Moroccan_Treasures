<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css/homenavbar.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title> @yield('titre')</title>
<style>

</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-5-strong  ">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class=" collapse navbar-collapse " id="navbarSupportedContent">
          <a class="navbar-brand" href="#"><img src='pictures/logoPFE.png' alt='logo' style='width:60px '/></a>
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="#">Acceuil</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">explorer le Maroc</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Destinations</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Favoris</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Community</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Autre service
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Espace Client</a>
                <a class="dropdown-item" href="#">Contact</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <div class='m-2'>
            <button  type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                 <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
             </svg>
            </button>
          </div>
          
        </div>
      </nav>

@yield('contenu')
</body>
</html>