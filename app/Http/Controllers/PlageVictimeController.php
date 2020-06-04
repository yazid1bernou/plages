<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  Illuminate\Support\Facades\Validator;
use Redirect;
use Auth ;
use DB ;
use DataTables;

use App\Plage_victime ;

use App\Intervention_plage ;
use PDF ;

use App\Charts\Plages_victimesCharts ;


class PlageVictimeController extends Controller
{

  // the constructor
public function __construct() {
  return $this->middleware('auth') ;
}

//----method  display all victime plage ------------------------

public function index_charts (Request $request) {
    $chiffre1 = Plage_victime::pluck('chiffre1' , 'created_at') ;
    $chiffre2 = Plage_victime::pluck('chiffre2' , 'created_at') ;

    $chart = new Plages_victimesCharts ;
    $chart->labels($chiffre1->keys());



    $chart->dataset('Test1 heart', 'bar', $chiffre1->values())->options([
    'backgroundColor' => 'green',
]);
     $chart->dataset('Test2 heart', 'bar', $chiffre2->values())->options([
    'backgroundColor' => 'red',
]);
    return view ('admin.plage_victimes.index' , compact('chart')) ;
}

// ------- method store victime plage---------------------------------------------------

 public function store( Request $request  , Intervention_plage $intervention_plage ) {
       $validator = Validator::make($request->all(), [


         'question_victime' => 'required' ,
         'nom_victime' => 'required' ,
         'prenom_victime' => 'required' ,
         'sexe' => 'required' ,
         'nationalite' => 'required',
         'date_naissance' => 'required',
         'lieu_naissance' => 'required',
         'fonction' => 'required',
         'address_personnel' => 'required',
         'wilaya_victime' => 'required',
         'daira_victime' => 'required',
         'commune_victime' => 'required',
         'lieu_dit_victime' => 'required',
         'denomination_plage' => 'required',
         'situation_juridique_plage' => 'required',
         'situation_mer' => 'required',
         'couleur_fanion' => 'required',
         'date_heure_noyade' => 'required',
         'date_heure_repechage' => 'required',
         'cause_noyade' => 'required',
         'moyen_engage' => 'required',
         'evacuee_vers' => 'required',
         'presents_lieux' => 'required',

      ]);
      // if store fail ------------------------------------------

      if ($validator->fails()) {
             return back()->with('error',  'لم تتم الإضافة')->withInput();
         }

    $plage_victime =    Plage_victime::create([
        'question_victime' => request('question_victime') ,
        'nom_victime' => request('nom_victime') ,
        'prenom_victime' => request('prenom_victime') ,
        'sexe' => request('sexe'),
        'nationalite' => request('nationalite'),
        'date_naissance' => request('date_naissance'),
        'lieu_naissance' => request('lieu_naissance') ,
        'fonction' => request('fonction'),
        'address_personnel' => request('address_personnel') ,
        'wilaya_victime' => request('wilaya_victime') ,
        'daira_victime' => request('daira_victime'),
        'commune_victime' => request('commune_victime'),
        'lieu_dit_victime' => request('lieu_dit_victime'),
        'denomination_plage' => request('denomination_plage') ,
        'situation_juridique_plage' => request('situation_juridique_plage'),
        'situation_mer' => request('situation_mer'),
        'couleur_fanion' => request('couleur_fanion'),
        'date_heure_noyade' => request('date_heure_noyade'),
        'date_heure_repechage' => request('date_heure_repechage') ,
        'cause_noyade' => request('cause_noyade'),
        'moyen_engage' => request('moyen_engage'),
        'evacuee_vers' => request('evacuee_vers'),
        'presents_lieux' => request('presents_lieux'),

         'intervention_plage_id' =>  $intervention_plage->id



      ]) ;

      return back()->with('success' , '<p> لقد تم إضافة هذه المعلومات  </p>' ) ;
     }

// method for display form edit plage victime ---------------

     public function edit ( $id ) {

            $plage_victime = Plage_victime::find($id);
            return view('admin.plage_victimes.edit' , compact('plage_victime')) ;

         }
// method for update victime plage -------------
public function update ($id , Request $request) {
  $plage_victimeUpdate =  Plage_victime::find($id);
  $plage_victimeUpdate->fill($request->all() )->save() ;
 return back()->with('success' , '<p> تم التغيير بنجاح </p>' ) ; 

}





         // --------display  pdf plage victime  -----------------
   public function pdf_plage_victime($id) {
    $plage_victime = Plage_victime::find($id);
     $pdf = PDF::loadView('pdf_plage_victime', $plage_victime , compact('plage_victime'));


         return $pdf->stream('plage_victime') ;
      }




}
