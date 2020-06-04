<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

  protected $fillable = [

           'nombre_test'  , 

           'intervention_plage_id',




     ] ;



  public function intervention_plage() {
    return $this->belongsTo('App\Intervention_plage') ;
  }

}
