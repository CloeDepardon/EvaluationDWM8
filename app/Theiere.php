<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theiere extends Model
{
  public $timestamps = false;
  public function magasins()
    {
      return $this->belongsToMany('App\Magasin');
    }
  public function reference()
    {
      return $this->belongsTo('App\Reference');
    }

}
