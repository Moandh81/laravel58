@extends('master')

@section('title', 'Ajouter un bien')

@section('content')



    <div class="container">

        <div class="row">

            <h1 class="mx-auto">Ajouter un bien</h1>

        </div>


        <div class="row">


            <form class="w-50 mx-auto" method="post" action="{{route('postAddBiens')}}" enctype="multipart/form-data">
                @csrf


                <div class="form-group">
                    <label for="type_bien">Type de bien</label>
                <select class="form-control"  name="type_bien">
                    <option>Maison</option>
                    <option>Appartement</option>
                    <option>Bureau</option>
                    <option>Commerce</option>
                    <option>

                </select>

                </div>


                <div class="form-group">
                    <label for="type_transaction">Type de transaction</label>
                    <select class="form-control"  name="type_transaction">
                        <option>Achat</option>
                        <option>Vente</option>
                        <option>Location</option>

                        </select>

                </div>


                <div class="form-group">
                    <label for="nbre_chambres">Nombre de Chambres</label>
                    <select class="form-control"  name="nbre_chambres">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6 et plus</option>




                    </select>

                </div>




                <div class="form-group">
                    <label for="ville">Localisation</label>
                    <select class="form-control"  name="ville">
                        <option>Ariana</option>
                        <option>Carthage</option>
                        <option>Aouina</option>
                        <option>Marsa</option>




                    </select>

                </div>



                <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="number" min="0" step="1" class="form-control" name="prix">

                </div>


                <div class="form-group">
                    <label for="photos">Photos du bien</label>
                    <input type="file" class="form-control-file" name="photos" multiple>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control article-ckeditor" rows="10" name="description"></textarea>

                </div>







                <button type="submit" class="btn  btn-outline-success btn-lg w-100">Rechercher</button>
            </form>


            </div>

        </div>


    </div>


    @endsection
