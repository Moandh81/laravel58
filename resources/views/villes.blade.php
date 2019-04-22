@extends('master')

@section('title', 'Liste des villes')

@section('content')


<div class='container'>


  <div class="row">

  <h1 class="mx-auto">Liste Des Villes</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Ville</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>

    </tr>
  </thead>
  <tbody>


    @foreach($villes as $ville)
    <tr>


      <th scope="row">{{$ville->id}}</th>
      <td>{{$ville->libelle}}</td>


<td> <a href="{{route('getUpdateVilles', $ville->id)}}" class="btn btn-outline-primary" role='button'>Modifier </a>
</td>


<td> <a href="{{route('deleteVilles', $ville->id)}}" class="btn btn-outline-danger" role='button'>Supprimer </a>
</td>

    </tr>

@endforeach

  </tbody>
</table>

</div>


</div>




@endsection
