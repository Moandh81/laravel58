<?php

namespace App\Http\Controllers;
use App ;

use Illuminate\Http\Request;

class VillesController extends Controller
{


    public function getVilles() {

      $villes = App\Ville::all();
      //dd($villes);

      return view('villes', compact('villes'));
    }


    public function addVilles() {

    return view('addville');
    }

public function postVilles(Request $request)  {

$validated = $request->validate([

  'libelle' => 'required|unique:villes|max:255'


]) ;

$ville = new App\Ville;

$ville->libelle = $validated['libelle'] ;
$ville->save();

return back()->with('success', ['Ville insérée avec succés']) ;
}



public function deleteVilles($id) {

  $ville = App\Ville::findOrFail($id);
  $ville->delete();
  return redirect('villes')->with('success', 'Votre page a été supprimée');


}


public function getUpdateVilles($id) {
  $ville = App\Ville::findOrFail($id);
  
  return view('updateVille', compact('ville'));

}


public function postUpdateVilles($id) {

  $data =  request()->validate([

    'libelle' => 'required|unique:villes|max:255'


  ]) ;

  $ville = App\Ville::findOrFail($id);
  $ville->update($data) ;
  return redirect('villes')->with('success', 'La ville a été mise à jour');

}


}
