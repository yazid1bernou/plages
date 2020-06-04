<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use App\User ;
use App\Intervention_plage ;
use App\Plage_victime ;

use Auth ;
use DB ;
use DataTables;


class Intervention_plageController extends Controller
{

  // the constructor
public function __construct() {
  return $this->middleware('auth') ;
}


  // method of display bilan d'interventions a travers les plages-----------------------
  public function  index ( Request $request) {

  if(Auth::user()->role == 'utilisateur_principale' || Auth::user()->role == 'viewer' || Auth::user()->role == 'viewer2' ) {
    if ($request->ajax()) {
     $data =DB::table('intervention_plages')
     ->select('intervention_plages.*' ,  'users.wilaya' , 'users.role' , 'users.code_wilaya')
     ->selectRaw("count(case when plage_victimes.situation_juridique_plage = 'autorise_hhs' then 1 end) as count_autorise_hhs")
     ->selectRaw("count(case when plage_victimes.situation_juridique_plage = 'autorise_phs' then 1 end) as count_autorise_phs")
     ->selectRaw("count(case when plage_victimes.situation_juridique_plage = 'interdite' then 1 end) as count_autorise_interdite")
     ->join('users','intervention_plages.user_id','=','users.id')
     ->join('plage_victimes','plage_victimes.intervention_plage_id','=','intervention_plages.id')

     ->groupBy('plage_victimes.intervention_plage_id' )

     ->get() ;
     return Datatables::of($data)
     ->editColumn('nombre_intervs' , function ($data) {
            $nombre_intervs = '<a href="'.url('intervention_plages/' . $data->id ).'" > '.$data->nombre_intervs.'</a> ' ;
        return $nombre_intervs ;
     })

     ->addColumn('liste_victimes', function($data){


       $liste_victimes = '<a href="'.url('intervention_plages/' . $data->id ).'" > <i class="nav-icon fa fa-reply"></i></a> ' ;
      return $liste_victimes;
      })


      ->addColumn('pdf_plage_intervention', function($data){


       $pdf_plage_intervention = '<a href="'.url('pdf_intervention_plage/' . $data->id ).'" > PDF</a> ' ;
       return $pdf_plage_intervention;
       })



      ->addColumn('action', function($data){


           $all = '<a href="'.url('intervention_plages/' . $data->id . '/edit').'" > <i class="nav-icon fa fa-edit"></i></a> '  ;
           $all .= '<a href="'.url('intervention_plages/delete/' . $data->id ).'" > <i class="nav-icon fa fa-trash"></i></a> ' ;


         return $all;

       })->rawColumns(['pdf_plage_intervention','action' , 'liste_victimes' , 'nombre_intervs'])
         ->make(true) ;
 }


 return view('admin.intervention_plages.index');

}

else if (Auth::user()->role == 'utilisateur_wilaya'){
  if ($request->ajax()) {
   $data =DB::table('intervention_plages')
   ->select('intervention_plages.*' ,  'users.wilaya' , 'users.role' , 'users.code_wilaya')
   ->selectRaw("count(case when plage_victimes.situation_juridique_plage = 'autorise_hhs' then 1 end) as count_autorise_hhs")
   ->selectRaw("count(case when plage_victimes.situation_juridique_plage = 'autorise_phs' then 1 end) as count_autorise_phs")
   ->selectRaw("count(case when plage_victimes.situation_juridique_plage = 'interdite' then 1 end) as count_autorise_interdite")
   ->join('users','intervention_plages.user_id','=','users.id')
   ->join('plage_victimes','plage_victimes.intervention_plage_id','=','intervention_plages.id')

   ->groupBy('plage_victimes.intervention_plage_id' )
    ->where('users.wilaya', '=', Auth::user()->wilaya)

   ->get() ;
   return Datatables::of($data)
   ->editColumn('nombre_intervs' , function ($data) {
          $nombre_intervs = '<a href="'.url('intervention_plages/' . $data->id ).'" > '.$data->nombre_intervs.'</a> ' ;
      return $nombre_intervs ;
   })

   ->addColumn('liste_victimes', function($data){


     $liste_victimes = '<a href="'.url('intervention_plages/' . $data->id ).'" > <i class="nav-icon fa fa-reply"></i></a> ' ;
    return $liste_victimes;
    })


    ->addColumn('pdf_plage_intervention', function($data){
           $pdf_plage_intervention = '<a href="'.url('pdf_intervention_plage/' . $data->id ).'" > PDF</a> ' ;
           return $pdf_plage_intervention;
     })


    ->addColumn('action', function($data){
         $all = '<a href="'.url('intervention_plages/' . $data->id . '/edit').'" > <i class="nav-icon fa fa-edit"></i></a> '  ;
         $all .= '<a href="'.url('intervention_plages/delete/' . $data->id ).'" > <i class="nav-icon fa fa-trash"></i></a> ' ;


       return $all;

     })->rawColumns(['pdf_plage_intervention','action' , 'liste_victimes' , 'nombre_intervs'])
       ->make(true) ;
}


return view('admin.intervention_plages.index');

}

  }

// method create intervention plage -----------------------------
public function create(){
   return view('admin.intervention_plages.create');
}

//---method store intervention plage ----------
public function store( Request $request  ) {
  $validator = Validator::make($request->all(), [


    'nombre_estivants' => 'required' ,
    'nombre_intervs' => 'required' ,
    'pers_sauve_noyade' => 'required' ,
    'pers_soigne_place' => 'required' ,
    'pers_evacue_c_s' => 'required' ,
    'pers_nautique_blesse' => 'required' ,
    'pers_nautique_decede' => 'required' ,
    'pers_sauve_avion' => 'required' ,
    'date_jour' => 'required' ,



 ]);


  // if store fail ------------------------------------------
 if ($validator->fails()) {
        return back()->with('error',  'لم تتم الإضافة')->withInput();
    }

$intervention_plage  =    Intervention_plage::create([


  'nombre_estivants' => request('nombre_estivants') ,
  'nombre_intervs' => request('nombre_intervs') ,
  'pers_sauve_noyade' => request('pers_sauve_noyade'),
  'pers_soigne_place' => request('pers_soigne_place'),
  'pers_evacue_c_s' => request('pers_evacue_c_s'),
  'pers_nautique_blesse' => request('pers_nautique_blesse'),
  'pers_nautique_decede' => request('pers_nautique_decede'),
  'pers_sauve_avion' => request('pers_sauve_avion'),
  'date_jour' => request('date_jour') ,
  'user_id' => Auth::user()->id  ,



 ]) ;

 $plage_victime= Plage_victime::create ([
   'intervention_plage_id' => $intervention_plage->id ,


 ]) ;

 return redirect('/intervention_plages')->with('success' , '<p> لقد تم إضافة هذه المعلومات  </p>' ) ;
}


 //  method edit  interventions plages -----------------
public function  edit($id) {
   $intervention_plage = Intervention_plage::find($id);  
  return view ('admin.intervention_plages.edit' , compact('intervention_plage')) ; 
}


public function update ( $id , Request $request ) { 
    $intervention_plageUpdate =  Intervention_plage::find($id);
    $intervention_plageUpdate->fill($request->all() )->save() ; 
   return back()->with('success' , '<p> تم التغيير بنجاح </p>' ) ; 
}


// method  of delete intervention plage -----------------------------
public function destroy($id)
    {
        $intervention_plage = Intervention_plage::find($id);

        
          $intervention_plage->delete();    
          return back()->with('success' , '<p> لقد تم الحذف   </p>' ) ; 


    }

 

// --------display  pdf -----------------
public function pdf_intervention_plage($id) {
$intervention_plage = Intervention_plage::find($id);
$view =  view('pdf' , compact('intervention_plage')) ;
$pdf = \App::make('dompdf.wrapper');
$pdf->loadHTML($view)
->setPaper('a4', 'landscape')->setWarnings(false)->save('pdf_plage_intervention.pdf') //save pdf en public
;
return $pdf->stream('intervention_plage') ;
}


//----methode pour afficher une seule operation  --------------------
public function intervention_plage  (Intervention_plage $intervention_plage  ) {



  return view ('admin.intervention_plages.intervention_plage' , compact('intervention_plage') ) ;



  }





}
