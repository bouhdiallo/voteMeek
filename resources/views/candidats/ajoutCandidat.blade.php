@extends('layouts.app')

@section('contenu')
 <div class="container">
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{session ('success') }}
    </div>
    @endif
 </div>

<form action= {{ route('store.candidat') }}  method="post">

@csrf
    <div class="container">
         <div class="card-header bg-info text-center  text-white">Ajouter un candidat</div>  <br>
    <div class="col-md-4"> 
      <label for="validationCustom01" class="form-label" >Nom</label>
      <input type="text" class="form-control" id="validationCustom01" name="nom" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div> 
    </div><br> <br><br>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label" >Prenom</label>
      <input type="text" class="form-control" id="validationCustom02" name="prenom" value="Otto" required>
      {{-- <div class="valid-feedback">
        Looks good!
      </div>  --}}
       <br> <br>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label" >Etablissement</label>
        <input type="text" class="form-control" id="validationCustom02" name="etablissement" value="Otto" required>
        <div class="valid-feedback">
          Looks good!
        </div>
    </div>  <br> <br>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label" >filiere</label>
      <input type="text" class="form-control" name="filiere" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>   <br> <br>
    <div class="col-md-3">
        <label for="validationCustom04" class="form-label" >Niveau D'Etude</label>
        <select class="form-select" name="niveau" id="validationCustom04" required>
            <option selected disabled value="">Choisir le niveau</option>
            <option>Licence 1</option>
            <option>Licence 2</option>
            <option>Licence 3</option>
            <option>Master 1</option>
            <option>Master 2</option>
            <option>Doctorat 1</option>
            <option>Doctorat 2</option>
            <option>Doctorat 3</option>
        </select>
    </div>
    </div>  <br> <br>
    {{-- <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Accepter les termes et conditions d'utilisation
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>  
      </div>
    </div> <br> --}}
    <div class="col-12">
      <button class="btn btn-primary" type="submit" text-center>Enregistrer</button>
    </div>
  </form>
</div>





@endsection