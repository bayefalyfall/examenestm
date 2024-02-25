<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etudiant estm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Etudiant estm</h1>
    <a href="/ajouter" class= "btn btn-primary"></a>

    <div class="container">
  <div class="row">
    <div class="col s12">
    <h1>Ajouter un Etudiant Estm</h1>
    <hr>

    @if (session('status'))
        <div class="alert alert-success">
        {{session('status')}}

        </div>
    @endif>
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger"> {{$error}}</li>
    @endforeach
    <form Action="/ajouter/traitement" class="form-groupe">
        @csrf
  <div class="form-groupe">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="Nom" name="nom"
    
</div>

<div class="form-groupe">
    <label for="Prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="Preom" name="prenom"
    
</div>
<div class="form-groupe">
    <label for="telephone" class="form-label">telephone</label>
    <input type="text" class="form-control" id="telephone" name="telephone"
    
</div>
<div class="form-groupe">
<label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" id="Email" name="email"
  </div>
 
  <button type="submit" class="btn btn-primary">ajouter un etudiant</button>

<br> </br>

<a href="/etudiant" class= "btn btn-danger">Revenir à la liste des étudiants</a>

</form>
 
    </div>
    
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>