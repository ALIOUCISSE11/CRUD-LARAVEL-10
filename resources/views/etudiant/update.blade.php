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
                    
                <h1>Update a student</h1>
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
                <!--- Formulaire de modification d'un étudiant ---->
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center text-muted">
                            <marquee behavior="" direction="">  Student modification form</marquee>
                                </div>
                                <div class="card-body">
                <form class="form-group"  action="/update/traitement" method="POST">
                    @csrf
                    <div class="card-body">
                        <input type="hidden" style="display :none; " name="id" value="{{ $etudiants->id }}" autofocus>

                        <div class="mb-3">
                            <label for="nom" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="nom" name="nom" value="{{ $etudiants->nom }}" autofocus>    
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $etudiants->prenom }}" autofocus>    
                        </div>

                        <div class="mb-3">
                            <label for="classe" class="form-label">Class</label>
                            <input type="text" class="form-control" id="classe" name="classe" value="{{ $etudiants->classe }}" autofocus>    
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary">Update a student</button>
                        <br><br>
                        <a href="/etudiant" class="btn btn-danger">Return to the list of students</a>
                        </div>
                    </div>

                
            </div>
        </div>
    </div>
</div>
                </form>                
           
      

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>