<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Inscription</title>
</head>
<body>
    <form action="save_register" method="post" class="container">
   @csrf
   <h1>Formulaire d'inscription</h1>
   <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Nom</label>
         <input type="text" class="form-control" name="name">
    </div>
   <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Email</label>
         <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
         <input type="password" class="form-control" name="password">
    </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</body>
</html>