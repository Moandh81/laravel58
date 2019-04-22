<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    protected $fillable = ['type_transaction', 'description', 'surface', 'nombre_chambres', 'prix', 'ville_id' ];
}

public function photos() {
  return $this->hasMany("App\Photo");
}

public function villes() {
  return $this->hasOne("App\Ville");

}

public function categories() {
  return $this->hasOne('App\Category');
}

public function users() {
  return $this->belongsTo('App\User');
}
