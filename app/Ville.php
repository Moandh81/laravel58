<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $fillable = ['libelle'];
}


public function bien() {
  return $this->belongsTo('App\Bien');
}
