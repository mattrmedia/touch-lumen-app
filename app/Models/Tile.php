<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tile extends Model
{
  function category()
  {
    return $this->belongsTo('App\Models\Category');
  }

}
