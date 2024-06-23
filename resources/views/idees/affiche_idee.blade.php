<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> Liste des idées</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhi7BlJpn9wsUvKuCcdJhatqTQ7uod0rxP4w&s" alt="logo mairie HLM">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="affiche_idee">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ajouter_idee">Ajouter une idée</a>
        </li>
       
        
      </ul>

      @Auth
      <a href="#" onclick="document.getElementById('logout-form').submit()" class="btn btn-primary">
        <form action="logout" method="post" id="logout-form">@csrf</form>

      Se Deconnecter
      </a>

      @endAuth

    </div>
  </div>
</nav>

  <h1>Liste des idées </h1>
    @foreach($idees as $idee)
<div class="card">
  <h5 class="card-header">{{ $idee->auteur_nom_complet}}</h5>
  <div class="card-body">
    <h5 class="card-title">{{ $idee->libelle}}</h5>
    <p class="card-text">{{ Str::limit ( $idee->description,100)}}</p>

  
   @Auth

    <a href="detail_idee/{{ $idee->id}}" class="btn btn-primary">Voir detail</a>
    <a href="supprimer/{{ $idee->id}}" class="btn btn-danger">Supprimer</a>
    <a href="modifier_idee/{{ $idee->id}}" class="btn btn-success">Modifier</a>
    @endAuth

    <hr>
  </div>
</div>
    @endforeach
</body>
</html>