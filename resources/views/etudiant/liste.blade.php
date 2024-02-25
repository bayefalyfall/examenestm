<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste Etudiant estm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>liste Etudiant estm</h1>
    <a href="/ajouter" class= "btn btn-primary"></a>



    <div class="container text-center">
  <div class="row">
    <div class="col s12">
    <h1>Etudiant estm</h1>
    <hr>
    <a href="/ajouter" class= "btn btn-primary">Ajouter un etudiant</a>
    <hr>
    @if (session('status'))
        <div class="alert alert-success">
        {{session('status')}}

        </div>
    @endif>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>telephone</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                $ide = 1;
                @endphp
                @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $ide}}</td>
                    <td>{{ $etudiant->nom}}</td>
                    <td>{{ $etudiant->prenom}}</td>
                    <td>{{ $etudiant->telephone}}</td>
                    <td>{{ $etudiant->email}}</td>
                    <td>
    <a href="/update-etudiant{{ $etudiant->id}}" class= "btn btn-info">update</a>
    <a href="/delete-etudiant{{ $etudiant->id}}" class= "btn btn-danger">delete</a>
                    </td>
                </tr>
                @php
                $ide += 1;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
    
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>