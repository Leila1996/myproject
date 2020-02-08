<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    //

     public function user(){

return $this->belongsTo('App\User');

 }
}
