<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable['libelle'];
}

public function biens() {
  return $this->hasOne('App\Bien');
}
