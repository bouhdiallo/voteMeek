@extends('layouts.app')

@section('contenu')
 <div class="container">
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{session ('success') }}
    </div>
    @endif
 </div>

<form action=""  method="">

@csrf
    {{-- <div class="container">
         <div class="card-header bg-info text-center  text-white">Ajouter un candidat</div>  <br>
    <div class="col-md-4">  --}}
      <label for="validationCustom01" class="form-label" >Nom</label>
      <input type="text" class="form-control" id="validationCustom01" name="nom">
      <div class="valid-feedback">
        Looks good!
      </div> 
    </div><br> <br><br>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label" >Prenom</label>
      <input type="text" class="form-control" id="validationCustom02" name="prenom" value="Otto" required>
     <div class="valid-feedback">
        Looks good!
      </div>
       <br> <br>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label" >Etablissement</label>
        <input type="text" class="form-control" id="validationCustom02" name="etablissement" value="Otto" required>
        <div class="valid-feedback">
          Looks good!
        </div>
    </div>   <br> <br>
   <div class="col-md-3">
    <label for="exampleSelect1" class="form-label mt-4">Example select</label>
    <select class="form-select" id="exampleSelect1" name="candidat_id">
        @foreach ($candidat as $candidats)
        <option value="{{$candidats->id}}">{{$candidats->nom}} {{$candidats->prenom}}</option>
        @endforeach
      </select>
    </div>
    </div>  <br> <br>
   
    <div class="col-12">
      <button class="btn btn-primary" type="submit" text-center>soumettre mon vote</button>
    </div>
  </form>
</div>





@endsection