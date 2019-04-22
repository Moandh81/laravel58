@extends('master')

@section('title', 'Ajouter une ville')

@section('content')


<div class="container">



<div class="row">


  <h1 class='mx-auto mb-5'>Ajouter Une Ville</h1>

</div>

  <div class="row border border-danger">

    <form method='post' action='{{route('postVilles')}}' class="border boder-success w-50 mx-auto">
  <div class="form-group">
    <label for="libelle">Libelle</label>
    <input type="text" class="form-control"  placeholder="Nom de la ville" name='libelle'
value="{{ old('libelle') }}"
    >
  </div>


  <button type="submit" class="btn btn-primary">Ajouter</button>
  @csrf
</form>





  </div>



</div>

@if ($errors->any())
    <div class="alert alert-danger container">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif






@endSection
