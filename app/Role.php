<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['libelle', 'user_id'];
}


public function user() {
  return ^$this->belongsTo('App\User');
}
