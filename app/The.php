<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class The extends Model
{
  public $timestamps = false;
  public function magasins()
    {
      return $this->belongsToMany('App\Magasin');
    }
  public function type()
    {
      return $this->belongsTo('App\Type');
    }
}
