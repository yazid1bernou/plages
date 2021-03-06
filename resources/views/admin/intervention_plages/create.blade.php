@extends('admin.layouts.layout')



@section('header')

@endsection

@section('content')

<div class="container">


        <!-- radio -->


         <div class="desc card card-danger" >
             <div class="card-header">
               <h3 class="card-title">إضافة إحصائيات التدخل على مستوى الشواطىء  </h3>

               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                 </button>
               </div>
               <!-- /.card-tools -->
             </div>
             <!-- /.card-header -->
             <div class="card-body">

               <form  enctype ="multipart/form-data"  action="{{url('/intervention_plages/store')}}" method="post" style="direction:rtl">
              {{ csrf_field() }}

                 <div class="row">   <!--- start row -->
                   <div class="col-2">
                       <div class="form-group">
                     <label> التاريخ</label> 
                    <input type="date" name="date_jour" class="form-control" placeholder="">
                      </div>
                  </div>

                  <div class="col-2">
                    <div class="form-group">
                    <label> عدد المصطافين  </label>
                   <input type="number" name="nombre_estivants" class="form-control" placeholder="">
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="form-group">
                    <label>  عدد التدخلات  </label>
                   <input type="number" name="nombre_intervs" class="form-control" placeholder="">
                    </div>
                  </div>

                  <div class="col-3">
                    <div class="form-group">
                    <label>  عدد الأشخاص المنقذين من الغرق   </label>
                   <input type="number" name="pers_sauve_noyade" class="form-control" placeholder="">
                    </div>
                  </div>

                  <div class="col-3">
                    <div class="form-group">
                    <label>     الأشخاص المسعفين في المكان </label>
                   <input type="number" name="pers_soigne_place" class="form-control" placeholder="">
                    </div>
                  </div>

             </div>  <!---end row -->


             <div class="row">   <!--- start row -->

               <div class="col-2">
                 <div class="form-group">
                 <label>   عدد الأشخاص الذي تم إجلائهم الى المركزالصحي </label>
                <input type="text" name="pers_evacue_c_s" class="form-control" placeholder="">
                 </div>
               </div>
               <div class="col-2">
                 <div class="form-group">
                 <label>  عدد الجرحى بسبب المركبات البحرية </label>
                <input type="text" name="pers_nautique_blesse" class="form-control" placeholder="">
                 </div>
               </div>

               <div class="col-2">
                 <div class="form-group">
                 <label>  عدد الموتى بسبب المركبات البحرية </label>
                <input type="text" name="pers_nautique_decede" class="form-control" placeholder="">
                 </div>
               </div>

               <div class="col-2">
                 <div class="form-group">
                 <label>  الأشخاص المنقذين بواسطة الطائرة  </label>
                <input type="text" name="pers_sauve_avion" class="form-control" placeholder="">
                 </div>
               </div>




            </div>  <!---end row -->

      <div class="row">   <!--- start row -->
        <div class="col-4">
          <div class="form-group">

          </div>
      </div>
              <div class="col-4">
                <div class="form-group">
                  <button type="submit" class="btn btn-block btn-success btn-sm ">قم بحفظ هذه المعلومات</button>
                </div>
            </div>

            <div class="col-4">
              <div class="form-group">

              </div>
          </div>
        </div>  <!---- end row--->

           <!-- /.card -->

            </form>
@include('sweetalert::alert')
          </div>
        </div>
</div>  <!--- end container     -->



@endsection
