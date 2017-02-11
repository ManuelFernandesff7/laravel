<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    //
     protected $table = 'ciudad';
     
      public function estado()
    {
        return $this->belongsTo('App\Estado');
    }
     
     
}
