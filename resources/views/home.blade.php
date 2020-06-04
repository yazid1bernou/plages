@extends('admin.layouts.layout')

@section('header')


<style>
@keyframes blinkingText{
    0%{     color: #F00;    }
    49%{    color: #F00; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #F00;    }
}
* {
  font-family: 'XBRiyaz'  ;
}
</style>


@endsection

@section('content')

<!-- Main content -->
 <section class="content">
   <div class="container-fluid">
     <!-- Info boxes -->

     <!-- /.row -->


     <!-- /.row -->

     <!-- Main row -->
     <div class="row">
       <!-- Left col -->
         <div class="col-5" style="text-align:left ; color:#F00">
            <h3>  المديرية العامة </h3>  
         </div>
         <div class="col-2">
         <div style="text-align:center">
         <img src="{{ url('/admin/images/logo.png') }}" width="100px" height="100px">
         </div>
         </div>
         <div class="col-5" style="text-align:right ; color:#F00"> 
            <h3>  للحماية المدنية  </h3>  
         </div>
       
     </div>
     <!-- /.row -->


      <div class="row">
        <div class="col-6"> 
        <div class="card card-danger">
           <div class="card-header border-transparent">
             <h3 class="card-title">كل الإحصائيات  </h3>

             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-widget="collapse">
                 <i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-tool" data-widget="remove">
                 <i class="fa fa-times"></i>
               </button>
             </div>
           </div>
           <!-- /.card-header -->
           <div class="card-body p-0">
              
               <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
                    
                    <div class="info-box-content">
                   
             
                 <div class="row">
                   <div class="col-9">
                       <h5> عدد التدخلات :  </h5> 
                   </div> 
                   <div class="col-3">
                   <h3 id="total_interventions" style="color:#F00 ; animation:blinkingText 1.2s infinite;">  </h3>
                   </div> 
                 </div>
             </div>
          
              </div>
              <!-- /.info-box-content -->
            

            </div>
                  
               </div> <!-- end row ---> 
     <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5> عدد الأشخاص المنقذين من الغرق المؤكد : </h5>
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_sauve_noyade" style="color : #F00 "> </h5>
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5>  عدد الأشخاص المسعفين في المكان :</h5> 
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_soigne_place" style="color : #F00 "> </h5>
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5>   عدد الأشخاص المسعفين الى المركز الصحي :</h5>  
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_evacue_c_s" style="color : #F00 "> </h5> 
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5>      الأشخاص المنقذين بواسطة الطائرة :</h5>   
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_sauve_avion" style="color : #F00 "> </h5> 
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5>  عدد الجرحي بسبب المركبات البحرية :   </h5>   
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_nautique_blesse" style="color : #F00 "> </h5> 
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5>   عدد المتوفين بسبب المركبات : </h5>   
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_nautique_decede" style="color : #F00 "> </h5> 
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5> كل المتوفين :   </h5>   
                   </div> 
                   <div class="col-3">
                      <h5 id="total_decede" style="color : #F00 "> </h5> 
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 


              
              
            
           </div>
           <!-- /.card-body -->
           <div class="card-footer clearfix">
             <a href="javascript:void(0)" class="btn btn-sm btn-info float-left"></a>
             <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right"></a>
           </div>
           <!-- /.card-footer -->
           </div>
         <!-- /.card -->
       </div>
       <!-- /.col -->


       <div class="col-6"> 
        <div class="card card-danger">
           <div class="card-header border-transparent">
             <h3 class="card-title">  أخر الإحصائيات الخاصة باليوم :  </h3>

             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-widget="collapse">
                 <i class="fa fa-minus"></i>
               </button>
               <button type="button" class="btn btn-tool" data-widget="remove">
                 <i class="fa fa-times"></i>
               </button>
             </div>
           </div>
           <!-- /.card-header -->
           <div class="card-body p-0">
              
               <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
                    
                    <div class="info-box-content">
                   
             
                 <div class="row">
                   <div class="col-9">
                       <h5> عدد التدخلات :  </h5> 
                   </div> 
                   <div class="col-3">
                   <h3 id="total_interventions_jour" style="color:#F00 ; animation:blinkingText 1.2s infinite;">  </h3>
                   </div> 
                 </div>
             </div>
          
              </div>
              <!-- /.info-box-content -->
            

            </div>
                  
               </div> <!-- end row ---> 
     <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5> عدد الأشخاص المنقذين من الغرق المؤكد : </h5>
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_sauve_noyade_jour" style="color : #F00 "> </h5>
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5>  عدد الأشخاص المسعفين في المكان :</h5> 
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_soigne_place_jour" style="color : #F00 "> </h5> 
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5>   عدد الأشخاص المسعفين الى المركز الصحي :</h5>  
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_evacue_c_s_jour" style="color : #F00 "> </h5> 
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5>      الأشخاص المنقذين بواسطة الطائرة :</h5>   
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_sauve_avion_jour" style="color : #F00 "> </h5> 
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5>  عدد الجرحي بسبب المركبات البحرية :   </h5>   
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_nautique_blesse_jour" style="color : #F00 "> </h5> 
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5>   عدد المتوفين بسبب المركبات : </h5>   
                   </div> 
                   <div class="col-3">
                      <h5 id="pers_nautique_decede_jour" style="color : #F00 "> </h5> 
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 
    <div class="row">
               <div class="col-md-12">
                    <div class="info-box bg-warning">
              <i class="fa fa-calendar"></i>

              <div class="info-box-content">
                 <div class="row">
                   <div class="col-9">
                      <h5> كل المتوفين :   </h5>   
                   </div> 
                   <div class="col-3">
                      <h5 id="total_decede_jour" style="color : #F00 "> </h5>  
                   </div> 
                 </div>
              
          
              </div>
              <!-- /.info-box-content -->
            </div>

            </div>
                  
    </div> <!-- end row ---> 


              
              
            
           </div>
           <!-- /.card-body -->
           <div class="card-footer clearfix">
             <a href="javascript:void(0)" class="btn btn-sm btn-info float-left"></a>
             <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right"></a>
           </div>
           <!-- /.card-footer -->
           </div>
         <!-- /.card -->
       </div>
       <!-- /.col -->


       
     </div>
     <!-- /.row -->
        
      
   </div><!--/. container-fluid -->
 </section>
 <!-- /.content -->
<script>
$(document).ready( function () {


 var link = "http://localhost/plages/public/bilan/" ;


   var total_interventions =  setInterval(function(){

   $("#total_interventions").load( link+"  #total_interventions " );
 }, 5000);

  var pers_sauve_noyade =  setInterval(function(){
  $("#pers_sauve_noyade").load( link+" #pers_sauve_noyade " );
}, 5000);

  var pers_sauve_noyade =  setInterval(function(){
  $("#pers_soigne_place").load( link+" #pers_soigne_place " );
}, 5000);

  var pers_evacue_c_s =  setInterval(function(){
  $("#pers_evacue_c_s").load( link+"  #pers_evacue_c_s " );
}, 5000);

var pers_sauve_avion =  setInterval(function(){
$("#pers_sauve_avion").load( link+" #pers_sauve_avion " );
}, 5000);


  var pers_nautique_blesse =  setInterval(function(){
  $("#pers_nautique_blesse").load( link+" #pers_nautique_blesse " );
}, 5000);

  var pers_nautique_decede =  setInterval(function(){
  $("#pers_nautique_decede").load( link+"  #pers_nautique_decede " );
}, 5000);

var total_decede =  setInterval(function(){
$("#total_decede").load( link+" #total_decede " );
}, 5000);
//--------------------total_par_jour---------------------------------------------------
var total_interventions_jour =  setInterval(function(){
$("#total_interventions_jour").load( link+"  #total_interventions_jour " );
}, 5000);


var total_interventions_jour =  setInterval(function(){
$("#total_interventions_jour").load( link+"  #total_interventions_jour " );
}, 5000);

var pers_sauve_noyade_jour =  setInterval(function(){
$("#pers_sauve_noyade_jour").load( link+" #pers_sauve_noyade_jour " );
}, 5000);

var pers_soigne_place_jour =  setInterval(function(){
$("#pers_soigne_place_jour").load( link+"  #pers_soigne_place_jour " );
}, 5000);

var pers_evacue_c_s_jour =  setInterval(function(){
$("#pers_evacue_c_s_jour").load( link+" #pers_evacue_c_s_jour " );
}, 5000);

var pers_sauve_avion_jour =  setInterval(function(){
$("#pers_sauve_avion_jour").load( link+"  #pers_sauve_avion_jour " );
}, 5000);


var pers_nautique_blesse_jour =  setInterval(function(){
$("#pers_nautique_blesse_jour").load( link+"  #pers_nautique_blesse_jour " );
}, 5000);

var pers_nautique_decede_jour =  setInterval(function(){
$("#pers_nautique_decede_jour").load( link+"  #pers_nautique_decede_jour " );
}, 5000);

var total_decede_jour =  setInterval(function(){
$("#total_decede_jour").load( link+"  #total_decede_jour " );
}, 5000);



})


</script>



@endsection
