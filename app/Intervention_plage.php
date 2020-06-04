<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervention_plage extends Model
{


  protected $fillable = [

           'nombre_estivants'  ,
           'nombre_intervs' ,
           'pers_sauve_noyade' ,
           'pers_soigne_place' ,
           'pers_evacue_c_s' ,
           'pers_nautique_blesse',
           'pers_nautique_decede',
           'pers_sauve_avion',
           'date_jour' ,
           'user_id',




     ] ;
  public function user() {
    return $this->belongsTo('App\User') ;
  }

  public function plage_victimes () {
       return $this->hasMany('App\Plage_victime') ;
 }

 public function tests () {
      return $this->hasMany('App\Test') ;
}
}
