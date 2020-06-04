<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plage_victime extends Model
{

  protected $fillable = [
           'question_victime' ,
           'nom_victime'  ,
           'prenom_victime' ,
           'sexe' ,
           'nationalite' ,
           'date_naissance' ,
           'lieu_naissance' ,
           'fonction' ,
           'address_personnel' ,
           'wilaya_victime' ,
           'daira_victime' ,
           'commune_victime' ,
           'lieu_dit_victime' ,
           'denomination_plage' ,
           'situation_juridique_plage' ,
           'situation_mer' ,
           'couleur_fanion' ,
           'date_heure_noyade' ,
           'date_heure_repechage' ,
           'cause_noyade' ,
           'moyen_engage' ,
           'evacuee_vers' ,
           'presents_lieux' ,  

           'intervention_plage_id',




     ] ;



  public function intervention_plage() {
    return $this->belongsTo('App\Intervention_plage') ;
  }



}
