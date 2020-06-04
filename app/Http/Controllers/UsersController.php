<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Validator;

use Redirect;
use App\User ;
use App\Profile ;

use Auth ;
use DB ;
use DataTables;


class UsersController extends Controller
{

  // the constructor
       public function __construct() {
       return $this->middleware('auth') ;
    }

// method display  all users ----------------------------------------
     public  function index ( Request $request ) {

        if ($request->ajax()) {
          $data = DB::table('users')

                      ->select('users.*' , DB::raw('COUNT(intervention_plages.date_jour) as counts '))
                      ->join('intervention_plages','intervention_plages.user_id','=','users.id')
                      ->groupBy('intervention_plages.date_jour' , 'intervention_plages.user_id' )

                      ->get();



             return Datatables::of($data)

            ->addColumn('action', function($data){


               $all = '<a href="'.url('users/' . $data->id . '/edit').'" > <i class="nav-icon fa fa-edit"></i></a> '  ;
               $all .= '<a href="'.url('users/delete/' . $data->id ).'" > <i class="nav-icon fa fa-trash"></i></a> ' ;
             return $all;



        })->rawColumns(['action'])
        ->make(true);
    }

    return view ("admin.users.index") ;
       }
//----method  create  user -----------------------------------------------------------

public function create () {
  return view ("admin.users.create") ;
}



//---method store user -----------------------------------------------------------

public function store ( Request $request ) {

  $validator = Validator::make($request->all(), [


    'name' => 'required' ,
    'email' => 'required' ,
    'role'   => 'required' ,
    'password' => 'required' ,
    'wilaya' => 'required' ,
    'daira' => 'required',
    'commune' => 'required',
    'latitude' => 'required',
    'longitude' => 'required',

 ]);
 // if store fail ------------------------------------------
 if ($validator->fails()) {
        return back()->with('error',  'لم تتم الإضافة')->withInput();
    }
   $user = User::create([
         'name' => $request->name ,
         'email' => $request->email ,
         'role'  => $request->role ,
         'password' => bcrypt($request->password),
         'wilaya'  => $request->wilaya ,
         'daira'  => $request->daira ,
         'commune'  => $request->commune ,
         'latitude'  => $request->latitude ,
         'longitude' => $request->longitude ,

   ]) ;

   $profile = Profile::create ([
     'user_id' => $user->id ,
     'avatar' => 'uploads/avatar/1.png'

   ]) ;
//---------else ----------------------------


   return redirect('/users')->with('success' , '<p>لقد تم إضافة مستخدم جديد بنجاح </p>' ) ;

 }


//---method edit user ---------------------------------------------------------------
public function edit ($id) {  
     $user = User::find($id);  
     return view('admin.users.edit' , compact('user')) ; 
}
//---method update user -------------------------------------------------------------
public function update ( $id ,  Request $request ) {

       $userUpdate =  User::find($id);
       $userUpdate->fill($request->all() )->save() ;
        return back()->with('success' , '<p> تم التغيير بنجاح </p>' ) ;
   }
//----method delete user -------------------------------------------------------
public function destroy($id)
    {
        $user = User::find($id);

          $user->profile->delete($id);
          $user->delete();
          return back()->with('success' , '<p> لقد تم حذف المستخدم </p>' ) ;


    }






}
