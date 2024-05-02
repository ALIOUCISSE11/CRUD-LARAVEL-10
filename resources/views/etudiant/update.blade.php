<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD BY ALIOU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container ">
        <div class="row">
            <div class="col s12">
                    
                <h1>Modifier un etudiant</h1>
                <hr>
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif 
                <ul>
                @foreach($errors->all() as $error)
                    <li class="alert alert-danger">{{ ($error) }}</li>
                @endforeach
                </ul>

                <form class="form-group"  action="/update/traitement" method="POST">
                    @csrf
                    
                        <input type="hidden" style="display :none; " name="id" value="{{ $etudiants->id }}">

                        <div class="mb-3">
                            <label for="nom" class="form-label">NOM</label>
                            <input type="text" class="form-control" id="nom" name="nom" value="{{ $etudiants->nom }}">    
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label">PRENOM</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $etudiants->prenom }}">    
                        </div>

                        <div class="mb-3">
                            <label for="classe" class="form-label">Classe</label>
                            <input type="text" class="form-control" id="classe" name="classe" value="{{ $etudiants->classe }}">    
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Modifier un etudiant</button>
                        <br><br>
                        <a href="/etudiant" class="btn btn-danger">Retour a la liste des etudiants</a>
                </form>                
           
      

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>