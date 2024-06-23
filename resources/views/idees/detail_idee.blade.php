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

          <h1 class="text-center">Ecrivez votre commentaire</h1>
      <form class="container" action="save_commentaire" method="post">
        @csrf
        <input type="hidden" name="idees_id" value="{{ $idee->id}}">
        <div class="mb-3">
          <label for="auteur" class="form-label">auteur</label>
          <input type="text" class="form-control" name="nom_complet_auteur">
        </div>
        <div class="mb-3">
          <label for="contenu" class="form-label">commentaire</label>
          <input type="text" class="form-control" name="libelle">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <h1 class="text-center">Vos commentaires</h1>
      @foreach($idee->commentaires as $commentaire )
      <div class="card w-75 mb-3  container">
      
        <div class="card-body">
          <h5 class="card-title">{{ $commentaire->nom_complet_auteur}}</h5>
          
          <p class="card-text">{{ $commentaire->libelle}}</p>
        
        </div>
        
      </div>
      @endforeach
     
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
         
   