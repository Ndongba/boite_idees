<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ajouter une idée</title>
</head>
<body>
    <form action="ajouter_idee" method="POST" class="container">
        @csrf

        <h1>Donnez Votre Idée</h1>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom Auteur</label>
            <input type="text" class="form-control" name="auteur_nom_complet">
        </div>
        <div class="mb-3">
           <input type="hidden" class="form-control" name="categories_id" value="1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" name="auteur_email">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Libelle</label>
            <input type="text" class="form-control" name="libelle">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
    
</body>
</html>