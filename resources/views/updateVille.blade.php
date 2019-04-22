@extends('master')

@section('title', 'Modifier la Ville')

@section('content')




<div class="container">



<div class="row">

  <h1>Modification de la ville</h1>

</div>


<div class="container">

  <div class="row border border-danger">

    <form method='post' action='{{route('postUpdateVilles' , $ville)}}' class="border boder-success w-50 mx-auto">
  <div class="form-group">
    <label for="libelle">Libelle</label>
    <input type="text" class="form-control"  placeholder="Nom de la ville" name='libelle'
value="{{ old('libelle', $ville->libelle) }}"
    >



      <button type="submit" class="btn btn-primary">Ajouter</button>
      @csrf
    </form>

  </div>


</div>
</div>

@endsection
