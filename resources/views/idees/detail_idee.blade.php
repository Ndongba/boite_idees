<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  
    <h1 class="text-center mb-5">Les details de l'idée de {{ $idee->auteur_nom_complet }}</h1>
    <div class="card mb-3" style="max-width: 2000px;">
        <div class="row g-0 ">
          <div class="col-md-4 ">
         </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $idee->libelle }}</h5>
              <p class="card-text">{{ $idee->description }}</p>
              <a href="#" class="btn btn-primary">Approvée</a>
              <a href="#" class="btn btn-danger">Refusée</a>
            </div>
          </div>
         
    </body>
</html> 