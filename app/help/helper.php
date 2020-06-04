<?php

function countTotalDecede() { 
    if(Auth::user()->role == 'utilisateur_principale' || Auth::user()->role == 'viewer' || Auth::user()->role == 'viewer2' ) {
       return \App\Plage_victime::where('question_victime' , 'oui')->count() ;
     } 
 else if (Auth::user()->role == 'utilisateur_wilaya') {
     
      return \App\Plage_victime::where('question_victime' , 'oui')
       ->where('users.wilaya', '=', Auth::user()->wilaya) 
       ->count() ; 

   }
}


function countNombreINtervention() {
  $data = DB::table("intervention_plages")->sum('nombre_intervs');
  return $data ;
}

function persSauveNoyade() {
  $data1 = DB::table("intervention_plages")->sum('pers_sauve_noyade');
  return $data1 ;
}

function pers_soigne_place() {
  $data1 = DB::table("intervention_plages")->sum('pers_soigne_place');
  return $data1 ;
}

function pers_evacue_c_s() {
  $data1 = DB::table("intervention_plages")->sum('pers_evacue_c_s');
  return $data1 ;
}

function pers_sauve_avion() {
  $data1 = DB::table("intervention_plages")->sum('pers_sauve_avion');
  return $data1 ;
}



function pers_nautique_blesse() {
  $data1 = DB::table("intervention_plages")->sum('pers_nautique_blesse');
  return $data1 ;
}

function pers_nautique_decede() {
  $data1 = DB::table("intervention_plages")->sum('pers_nautique_decede');
  return $data1 ;
}


// nombre  par jour ----------------
function countNombreINtervention_jour() {
  $nowDate = Carbon\Carbon::now();
  $data = DB::table("intervention_plages")->where('date_jour'  , $nowDate->toDateString())->sum('nombre_intervs');
  return $data ;
}

function persSauveNoyade_jour() {
  $nowDate = Carbon\Carbon::now();
  $data = DB::table("intervention_plages")->where('date_jour'  , $nowDate->toDateString())->sum('pers_sauve_noyade');
  return $data ;
}

function pers_soigne_place_jour() {
  $nowDate = Carbon\Carbon::now();
  $data = DB::table("intervention_plages")->where('date_jour'  , $nowDate->toDateString())->sum('pers_soigne_place');
  return $data ;
}

function pers_evacue_c_s_jour() {
  $nowDate = Carbon\Carbon::now();
  $data = DB::table("intervention_plages")->where('date_jour'  , $nowDate->toDateString())->sum('pers_evacue_c_s');
  return $data ;
}

function pers_sauve_avion_jour() {
  $nowDate = Carbon\Carbon::now();
  $data = DB::table("intervention_plages")->where('date_jour'  , $nowDate->toDateString())->sum('pers_sauve_avion');
  return $data ;
}


function pers_nautique_blesse_jour() {
  $nowDate = Carbon\Carbon::now();
  $data = DB::table("intervention_plages")->where('date_jour'  , $nowDate->toDateString())->sum('pers_nautique_blesse');
  return $data ;
}

function pers_nautique_decede_jour() {
  $nowDate = Carbon\Carbon::now();
  $data = DB::table("intervention_plages")->where('date_jour'  , $nowDate->toDateString())->sum('pers_nautique_decede');
  return $data ;
}
