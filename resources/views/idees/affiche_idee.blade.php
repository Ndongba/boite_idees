<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> Liste des idées</title>
</head>
<body>
    @foreach($idees as $idee)
<div class="card">
  <h5 class="card-header">{{ $idee->auteur_nom_complet}}</h5>
  <div class="card-body">
    <h5 class="card-title">{{ $idee->libelle}}</h5>
    <p class="card-text">{{ Str::limit ( $idee->description,30)}}</p>
    <a href="#" class="btn btn-primary">Voir detail</a>
    <hr>
  </div>
</div>
    @endforeach
</body>
</html>