<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class The extends Model
{
    public $timestamps = false;
  public function type()
    {
      return $this->belongsTo('App\Type');
    }
}
