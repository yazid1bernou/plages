<?php
use RealRashid\SweetAlert\Facades\Alert;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bilan', function() {
    return view('bilan');
});

// pdf--------------
Route::get('/pdf_intervention_plage/{id}', 'Intervention_plageController@pdf_intervention_plage') ;

Route::get('/pdf/', 'PlageVictimeController@generate_pdf') ;



// users ---------------------------------------------------------
 Route::resource('/users' , 'UsersController') ;
// display sens_coronas with ajax datatables ----------------------------
Route::get('/users', ['uses'=>'UsersController@index', 'as'=>'users.index']);

Route::get('/users/create' , 'UsersController@create')->name('users.create');
Route::post('users/create/fetch', 'UsersController@fetch')->name('dynamicdependent.fetch');

Route::post('/users/store' , 'UsersController@store')->name('users.store');
Route::get('/users/delete/{id}', 'UsersController@destroy')->name('users.delete');

Route::post('/users/changePassword' , 'UsersController@UpdatePassword') ;

 Route::resource('/intervention_plages' , 'Intervention_plageController') ;
// display interventions plages  with ajax datatables ----------------------------
Route::get('/intervention_plages', ['uses'=>'Intervention_plageController@index', 'as'=>'intervention_plages.index']);


// link for display and create and update  in intervention plage
Route::get('/intervention_plages', ['uses'=>'Intervention_plageController@index', 'as'=>'intervention_plages.index']);
Route::get('/intervention_plages/create' , 'Intervention_plageController@create')->name('intervention_plages.create');
Route::post('/intervention_plages/store' , 'Intervention_plageController@store')->name('intervention_plages.store');
Route::get('/intervention_plages/delete/{id}', 'Intervention_plageController@destroy')->name('intervention_plages.delete');

// link pour afficher la page d'une seule row intervention plage
Route::get('/intervention_plages/{intervention_plage}' , 'Intervention_plageController@intervention_plage') ;
// link pour ajouter une fiche d'une victime
Route::post('/intervention_plages/{intervention_plage}/store' , 'PlageVictimeController@store');
//Route::get('home/table' , 'PlageVictimeController@indexcountExample');

//  link of plage victime
Route::resource('/plage_victimes' , 'PlageVictimeController') ;
// link for plage victime
Route::get('/plage_victimes' , 'PlageVictimeController@index_charts') ;
Route::get('/plage_victimes/{id}/edit', 'PlageVictimeController@edit') ; 
// link pdf plage victime
Route::get('/pdf_plage_victime/{id}', 'PlageVictimeController@pdf_plage_victime') ;
